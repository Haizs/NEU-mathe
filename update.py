# -*- coding: UTF-8 -*-
import os, os.path
import zipfile
import csv
import os

def checkCSV(csvName, sourceName):
    with open(csvName) as f:
        reader = csv.reader(f)
        for row in reader:
            a = row[1].split('_')
            fname = './ChoiceSource/' + sourceName + '/' + a[0] + '/' + a[1] + '/' + row[1] + '.zip'
            if (not os.path.exists(fname)):
                print('Not Found: ' + fname)
                filelist = []
                for i in range(0, 6):
                    filelist.append(
                        './TeacherChoice/' + sourceName + '/' + a[0] + '/' + a[1] + '/' + row[1] + '_' + str(i))
                zf = zipfile.ZipFile(fname, 'w', zipfile.zlib.DEFLATED)
                for tar in filelist:
                    name = tar.split('/')
                    zf.write(tar, name[5])
                zf.close()

if __name__ == '__main__':
    checkCSV('GS.csv', '高等数学_GS')
    checkCSV('GL.csv', '概率统计_GL')
    checkCSV('FB.csv', '复变函数_FB')