import os
import os.path
import csv
import re

headers = ['id', 'KnowledgeId', 'Type', 'Src', 'Name', 'Count']
rows = []
idCount = 0

if __name__ == '__main__':
    for root, dirs, files in os.walk('ChoiceSource/线性代数_XD'):
        for name in files:
            if (name != '.DS_Store'):
                idCount += 1
                if ('Easy' in root):
                    rows.append(
                        [idCount, int(re.findall(r'(?<=chapter)\d', root)[0]), 1, re.findall(r'/.*', root)[0] + '/',
                         os.path.splitext(name)[0], 6])
                elif ('Hard' in root):
                    rows.append(
                        [idCount, int(re.findall(r'(?<=chapter)\d', root)[0]), 3, re.findall(r'/.*', root)[0] + '/',
                         os.path.splitext(name)[0], 6])
                else:
                    rows.append([idCount, 8, 2, re.findall(r'/.*', root)[0] + '/', os.path.splitext(name)[0], 5])

    with open('XD_ChoiceTable.csv', 'w') as f:
        f_csv = csv.writer(f)
        f_csv.writerow(headers)
        f_csv.writerows(rows)
