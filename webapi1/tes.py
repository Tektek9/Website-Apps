import requests, schedule

def covid():
    api_url="https://covid19.kuningankab.go.id/api/latest-full-v2"
    rstl= requests.get(api_url).json()
    print(rstl)

'''
teruntuk kasus data banyak dan dilakukan pemilihan data spesifik maka silahkan gunakan cara dibawah ini:
def variabel():
    api_url="https://covid19.kuningankab.go.id/api/latest-full-v2"
    rstl= requests.get(api_url).json()
    cek= rstl[index yang mau diambil] //memilih index yang nantinya akan dilakukan pengambilan datanya
    ambil_dic= cek ["attributes"] //pengecekan/pendataan semua data sesuai dengan index yang sebelumnya sudah dipilih
    a =[ambil_dic] //pengambilan data semua data yang sudah didata kedalam list
    print(a)
    
    //NB untuk kasus ini tidak cocok digunakan apabila datanya hanya 1 negara, atau tidak ada sub data
'''

refresh_schedulewkwkwk=schedule.every(2).seconds.do(covid)

while True: #pengecekan apabila benar maka akan melakukan pending terlebih dahulu setelah itu akan lanjut refresh
    schedule.run_pending()

copad=covid()
print(copad)