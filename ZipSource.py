import os
import sys
import zipfile

if __name__ == '__main__':
    rootPath=sys.argv[1] if os.path.isdir(sys.argv[1]) else './'
    for root, dirs, files in os.walk(rootPath):
        for name in files:
            if (name != '.DS_Store' and os.path.splitext(name)[1]!='.zip'):
                zipFilename=os.path.join(root,name[:-2]+'.zip')
                if (not os.path.exists(zipFilename)):
                    print(zipFilename)
                    zipFile=zipfile.ZipFile(zipFilename,'w')
                    for i in range(0,6):
                        filename=os.path.join(root,name[:-2]+'_'+str(i))
                        if (os.path.exists(filename)):
                            print(filename)
                            zipFile.write(filename,name[:-2]+'_'+str(i))
                            os.remove(filename)
                    zipFile.close()