from random import *

file = open("aaa.txt","w");
i=63;
wiecej = True;

while i<101:
    file.write("insert into patients_illnesses (patient_id, illness_id) values ("+str(i)+","+str(randint(1,30))+");\n")
    if wiecej:
        i=i+1
    czy = randint(0,1)
    if czy == 1:
        wiecej = True
    else:
        wiecej = False
    print(wiecej)