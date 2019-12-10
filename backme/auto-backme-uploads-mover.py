
import os
import traceback

files = os.listdir('C:/xampp/htdocs/backme/uploads')

for x in files:
    try:
        with open('C:/xampp/htdocs/backme/uploads/'+x, 'rb') as fr:
            data = fr.read()

        try:
            with open('D:/backup/uploadss/'+x, 'xb') as f:
                f.write(data)
        except FileExistsError:
            pass
        except:
            traceback.print_exc()
    except:
        traceback.print_exc()
        print()
    

       
