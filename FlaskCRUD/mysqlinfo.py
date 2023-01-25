host="localhost"
user="root"
passwd=""

import mysql.connector as mysql

db = mysql.connect(
    host=host,
    user=user,
    passwd=passwd
)

cursor = db.cursor()
# cursor.execute("CREATE DATABASE mydatabase")
db.database="mydatabase"
# cursor.execute('''
#     create table data_pelanggan(
#         ID INT NULL AUTO_INCREMENT,
#         nama VARCHAR(100) NOT NULL,
#         alamat TEXT NOT NULL,
#         PRIMARY KEY ( ID )
#     )
# ''')
# cursor.execute("DROP DATABASE mydatabase")
#db.commit()
# cursor.execute("SHOW DATABASES")
# cursor.execute("DESC TABLE data_pelanggan")
# print(cursor.fetchall())

# cursor.execute("SHOW TABLES")

cursor.execute("INSERT INTO data_pelanggan (nama,alamat)  VALUES ('Irfan', 'Jogja')")
db.commit()

cursor.execute("SELECT * FROM data_pelanggan")
data = cursor.fetchall()
for row in data:
    print(data)