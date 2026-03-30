import sqlite3

conn = sqlite3.connect('db/hermes_development.sqlite')
result = conn.execute('SELECT * FROM feeds').fetchall()

for row in result:
    print('Row data:', row)