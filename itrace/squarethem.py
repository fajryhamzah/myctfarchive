#!/usr/bin/python
import urllib2
import urllib
import json
import sys

try: 
    from BeautifulSoup import BeautifulSoup
except ImportError:
    from bs4 import BeautifulSoup

main ="http://task-00000010.itrace.systems/square.php"

jawaban = "A,9,4,7,B,3,6,1,C";

req = urllib2.Request(main)
response = urllib2.urlopen(req)
cookie = response.headers.get('Set-Cookie')

html = response.read()
parsed = BeautifulSoup(html,"html.parser")
jumlah = parsed.find('span',class_="x").text

while True:
	try:
		jumlah = int(jumlah)-15

		A = str(2+jumlah)
		B = str(5+jumlah)
		C = str(8+jumlah)

		jwb = jawaban.replace("A",A)
		jwb = jwb.replace("B",B)
		jwb = jwb.replace("C",C)
		data = {'numbers':jwb}

		data = urllib.urlencode(data)

		req = urllib2.Request(main, data)
		req.add_header('cookie',cookie)
		# Make the request and read the response
		try: 
			resp = urllib2.urlopen(req)
		except urllib2.HTTPError, e:
			print str(e.code)
		except urllib2.URLError, e:
			print str(e.reason)
		except httplib.HTTPException, e:
			print e
		except Exception:
			import traceback
			print traceback.format_exc()

		html = resp.read()

		print html
		jumlah = json.loads(html)
		jumlah = jumlah["nextsum"]

	except:
		print "Done"
		sys.exit(0)
