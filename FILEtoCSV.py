import os.path
import csv
import re

headers = ['Id', 'KnowledgeId', 'Type', 'Src', 'Name', 'Count']


def doSubject(subject):
    idCount = 0
    rows = []
    for root, dirs, files in os.walk('ChoiceSource/' + subject):
        for name in files:
            if (name != '.DS_Store'):
                idCount += 1
                qType = 1 if ('Easy' in root) else 2 if ('Averge' in root) else 3
                rows.append([idCount, int(re.findall(r'(?<=/)\d+', root)[0]), qType, re.findall(r'/.*', root)[0] + '/',
                             os.path.splitext(name)[0],6])
    with open(subject + '.csv', 'w') as f:
        f_csv = csv.writer(f)
        f_csv.writerow(headers)
        f_csv.writerows(rows)


if __name__ == '__main__':
    doSubject('高等数学_GS')
    doSubject('复变函数_FB')
    doSubject('概率统计_GL')
    rows = []
    idCount = 0
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

    with open('线性代数_XD.csv', 'w') as f:
        f_csv = csv.writer(f)
        f_csv.writerow(headers)
        f_csv.writerows(rows)
