<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
		<title>Index of <?php $PDLists = array();foreach((array)$navs as $n=>$l){array_push($PDLists,$l);}$PDTitle = $PDLists[count($PDLists)-1];echo $PDTitle;?></title>
		<style>
img[alt=access],img[alt=database]{
	background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAWCAMAAAD3n0w0AAAAZlBMVEUAAAAAAAAzMzOZmZnw8PDo6OgzM5ns7Ozq6ur09PTu7u7m5uby8vLk4+T29vYnJyfl5eX+/v7g4ODS0uDi4uLd3dxcXK36+vr4+PigoKHn5/Hf3+nY2OTV1eLOz9xeXq6np6empqU7xVq/AAAAAXRSTlMAQObYZgAAANFJREFUGNNVztF6gyAMhuEmIoIgOLCobddu93+T+yG6rZ9n75MEL/y/yxF/oNu6rlvgwH/4eOnyuYXA1vOJD13L1rL3igXXl8ZYLhWVGrnhTaNg9d0Tt69NFh2CzUUpkipuGfeyfqpxHDrUMOCeLk+cGwZzorXW39VXJBT3XhCGV+M35swenSAIqySTNAvC8AQZ0/fO0STYDAib5xNHmDFUbZpoOXCA9eSqLZQEmwGrpV8E9S7u07KkLl4FYVjd5Ze6A2GymtIVCXL3FgMRvQf8AVAIDNC5n8MxAAAAAElFTkSuQmCC");
}
img[alt=Batch-File]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIHAH9/f////7+/vwAAAAAAgICAAP//AP///yH5BAEAAAcALAAAAAAUABYAQANieLrcDQLISetQEITN+47XUY0kFnWDUQwd6LxwLJtEbd83EGZeH7iiE2cgMLA4QJJSEpo5nwyIYEqtVnU0XC3A6mKDGl/ry+MUVp6kMFAwMAtI8nozOMZ31vw1VO/7/35QMAkAOw==");
}
img[alt=binary]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIFAP///wAAADMzM5mZmczMzP///wAAAAAAACH5BAEAAAUALAAAAAAUABYAQANuKLq89bAIQIIlwIINhg/PpI0Bxw2glJUkMHECNFXXam5oKHh87wspUYkWwLxiESHFUlwxLSFb65ZTaYgYatCGvXW2XpgrEm1pXmOZlMUCusHhE29rLmnLbNtdFfdWlVMmf2t6gnB9JykPT4yNKQkAOw==");
}
img[alt=C]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIEAP///wAAADMzM5mZmf///wAAAAAAAAAAACH5BAEAAAQALAAAAAAUABYAQANhKLq89JAIAEKol+rBw5taKFKDJ1FWqoGUALHjWH4CZ9+4YMIj6EYgC0aTKn5QxRhgdlLKds7n0Tn5AYnC1eo6zFZ0YOgwdhMLvSImS4XxqpHFJMkcly/pdbc4ujE98oAmCQA7");
}
img[alt=compressed]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIGAP////8zMzMzM2YAAAAAAJmZmf///wAAACH5BAEAAAYALAAAAAAUABYAQANyaGrSvRCOoAS4t2iiwlDTZ2FYwYURc41rakxBHJCXHH9Ro+2FwLmVVQsIGRGOyJ9ExiKZZDiYh5aR4opUgImoAlgEXKwXAw4bfWilq8lTg2Jd2vb2lmULtmieKvXUB00lBDBROIEZPwNXC4dabi5JSSkJADs=");
}
img[alt=CPP]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIEAP///wAAADMzM5mZmf///wAAAAAAAAAAACH5BAEAAAQALAAAAAAUABYAQANlKLq89JAIAEKot9IwengTJY7k8EmbZYkhJUAtKQMmKHR4rgtnLIevSGi1SqksIGMxk6mhZjOnD0qRUgGToFCkGrW0T2Kmwiv3UtDcGcM+rqxGKtztFs3p3eoan6etr3YnD3x8DwkAOw==");
}
img[alt=CSharp]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIEAJmZmTMzMwAAAP///////wAAAAAAAAAAACH5BAEAAAQALAAAAAAUABYAAANlGLq89JCEQaudIb5pO88RNwjkVYEbRa7nBXFlqQYCTaejkFdrj8u8EWAIEPx0sR7RKFEhdaMopXhk9aDUphMa5WZFnfDgu70CyWIx2tyroNOdNfvMBMOn9Xu8HiD6/0M3EHNzDwkAOw==");
}
img[alt=DIR]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIEAP/MmQAAAJlmMzMzM////wAAAAAAAAAAACH5BAEAAAQALAAAAAAUABYAQANXSLrcHUDIKYG9MRCIuxeDtgVkKToK561RmA5wLM/BgN4Pa5nkouoYEAn4CXEEkSRyqXThntDnD3NyBJArLDVFDAqnQImxexEPyZEvOu26Ut5v2IlHN9kSADs=");
}
img[alt=diskimg]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKL/AMDAwB4EBP///7+/v5mZmYCAgDMzMwAAACH5BAEAAAAALAAAAAAUABYAQANsaLq88BAYIc4po+gzKPnBMw1WaVJeKKEsOrnQaM4soSpfru/G3bYvQ2T1Q80OPtJFsznUks5fNCUqWm1Vq2AiHL6s327WejCUyz6tJwe9ZJrPqvI4FWBXpGL9LtPH8QOBgoEtfGqFKg90iyoJADs=");
}
img[alt=excel]{
	background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAWCAMAAAD3n0w0AAAAWlBMVEUAAAAAAAAzMzOZmZns7OwzM5nn5+fu7u7p6en19PXx8vHw8PDj4+P29vbl5eXz8/Ph4OD//v/S0uD4+Pjd3d3X1+P7+/tdXa1cXKzn5/HOz9xeXq7f3+ne3uiNp2u0AAAAAXRSTlMAQObYZgAAALdJREFUGNNVzVsWgyAMRVETQSCIWHxrO/9pNoAs8fi31yU2WNfc4Yc71nWaHBp8cLnktkyO0WPBRcaCMejJYsb1kjwLG8/IWoUJD8k5I78EmL6I0yadM2EnC6mMge8FeZJSouUSOhd2uZ98TghR0Bjvf2RVNK27jGxkk2m2Gz1RfhppGDIS1PUF01Po4q6ggrqxYDoHw9D3fUFRDx/U8RzwbhxhzqihrmD8a5qNM5cR21fIyME7xj+9wwpijoKqGAAAAABJRU5ErkJggg==");
}
img[alt=Executable-File]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIFAP///39/f7+/vwAAAAAAgP///wAAAAAAACH5BAEAAAUALAAAAAAUABYAQANUWLrcHSLISetQMIDN+45XUY0kFnkoADps674mIc80HYRZ6q3iqXM8klASghmPDIhgyWw2b7GaDDCgUqE9ze+DzW1VXd82KP6RnWgmdsBuu99tZCsBADs=");
}
img[alt=file]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIEAP///zMzMwAAAJmZmf///wAAAAAAAAAAACH5BAEAAAQALAAAAAAUABYAQANPGLq89JAEQKutI4s3r8eb9FUdFUDlaA2hkr1wHLQq0J1R6gl8T9erH5DC4gxBRtUEl6uVmCKVYEYVqmBWYDF63Opq3iMxCyZfQw+feh1KAAA7");
}
img[alt=font]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIEAP///wAAAJmZmTMzM////wAAAAAAAAAAACH5BAEAAAQALAAAAAAUABYAQANnOLq89JAMQCsQAYcr8JtWpW2UJ4UhSA0QGLxC+ZJX8A1dru+DfaIVECuiQo1mvmItA3iJkpaYxSn7AENSkzIFGBKvq+AXPOv1rMCRDoplUmvopUbzRNOfNO0VWf9d73pgbRFIhYY+CQA7");
}
img[alt=HTML]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWALMIAP///wAAADMzM5mZmWbM/5lmM//MM/8zM////wAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAgALAAAAAAUABYAQARsUMhJJ7oYCQBE+R8nDmRwbWKqcoOpcYJhEDScChi67u0pkMCgUODS7VC4DJLG5ASe0OJu2ntNV1XjlSW9bpJKWMUGC3dmTUCAyO56QIVUsLsddaP4gP3kzEP3VhwHaniARoN5hnVyLhd+jy4RADs=");
}
img[alt=image]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWALMLAP///zMzMwAAAP8zMwCZM5mZmQCZzMzMzAAzZmYAAGZmZv///wAAAAAAAAAAAAAAACH5BAEAAAsALAAAAAAUABYAQASMMMhJ57p4BTB6JyBxAEBhCtdGruRhvC9SoBrneaNKBpgOhMCAS0aTmI7IZKDIagJUvMzm5kkABNgs8/ABHIKtWYp1CIQUARhx3Dwg3vC3uOZcbaLSut2ep3asAkuCTH4DViRIhB4ELSAjiFsJCSJABBtucz5mQGgxmW0UMAZrdG2inkx6TnMXWq6vNBEAOw==");
}
img[alt=movie]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIGAAAAAJmZmczMzDMzM////2ZmZv///wAAACH5BAEAAAYALAAAAAAUABYAQANoCLrcahAIAUq4OBBJR5xVhm2gZ3ChqKEmY6nb0oIOU35Uoe862UWLlyimmFFqi9sJJMz4AK0FYUqlMozI5O8UVK1kuNSQFW6OyFxFdX0t83ZPrPkSByrm32LZW18es0oGA4OEhYaDEAkAOw==");
}
img[alt=pdf]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIEAP///wAAADMzM5mZmf///wAAAAAAAAAAACH5BAEAAAQALAAAAAAUABYAQANlKLq89JAIEKqtIIPBw5sahmnZ4ElhkGFgJkCTeQUDWZ4Kp++8gFMzliuCullqwd9opbKZPsCgbfObWqnQK2DyIk6SqlY3G7VQfOiqdqNTJqdPFBiuXt+gc2dd1CTFW3ZYEGBgDwkAOw==");
}
img[alt=php]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIFAAAAAP///y9PT3CAkL6+vv///wAAAAAAACH5BAEAAAUALAAAAAAUABYAQANqKLq89bCIAAC1tZIwOnhTdV3ZNXzSKGZT4ApQiM2uW52g0O18L6AyzagFi8hqqkwGRFrRbsDmxmmKimpUKBPJnRSNyWHtm1JOMb90lMvmWZ9wXBku1KbYeM477JQHAWdJfnl4cg9KiIkoCQA7");
}
img[alt=powerpoint]{
	background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAWCAMAAAD3n0w0AAAAaVBMVEUAAAAAAAAzMzOZmZnv7+/x8fHt7e0zM5ksLCzk5OTi4uL19fXq6uro6Oj29vbz8/O+vr7m5ub//v/s7OzS0uD4+Pjp6enf39+6urrc3dzX1+PBwcH7+/tdXa1cXKzn5/Hf3+nOz9xeXq68nKh/AAAAAXRSTlMAQObYZgAAAMdJREFUGNNVzdkagiAQhuGYJHbIQlxSW+7/IhtgMv04e58fOMG+EwU37DnPXefBwB+nj1imznsIAX44iVw0BgLnUHH+CJzFxQTgvGmg4FNg3ogXZ1BOxm4R3pu4cs5KFSO+F8Ubr17OWEHv4yrWd4N2tz80JoRXnqHZ5CqicbKUXFtxI2uda1XFzdJVDoqw2ENeHZpUumL+FU3mHdOEeVZ3SsmhJ8QZ/toqpfUgCe84I9M9Gytato8wbbO+H0dCOB8CRIwdQ/wCmUcOPk2AFkMAAAAASUVORK5CYII=");
}
img[alt=Photoshop],img[alt=GIMP],img[alt=MediBang],img[alt=CSP],img[alt=Krita],img[alt=SAI]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWALMIAP///wAAAJmZmTMzM//MM/9mZplmAMzMzP///wAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAgALAAAAAAUABYAAARtEMlJabg111B60ODlgVlwENxHWgSqrpLZGi8ctBgcnwRNDYKgUHhzBQeSAWDJZF56AYBApWw2L5flNGm9ZrXUrjPK3CKqgKg6bTVXyeJymG2Fg7n0+P28tPfbc1iCXW56hFRAQ4pDAzWCj5AqEQA7");
}
img[alt=script]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIEAP///wAAADMzM5mZmf///wAAAAAAAAAAACH5BAEAAAQALAAAAAAUABYAQANeKLq89JAIQAOwNIPBw5taGA6elFkYBarQKorkJ3B0bQulK4JCZFYXTWBIzL2Osd9xZFwyP85Jz6cLrabQS/GE6zaLKUqt6cwkQWCw+ZsmrrNtt5gdfyvLm9IjHn8kAAA7");
}
img[alt=sound]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIGAAAAADMzM2ZmZpmZmf///8zMzP///wAAACH5BAEAAAYALAAAAAAUABYAQANTaLrc3iDKQGNgkQy7JKBPJwkk95iG9zkUGL6Oep0AKRRyaLkKCq0pzQSTgxlFgGNq5CNGbLim6OYJSHsT13U5I3Z/s8wGiDSpyMExuvXF7pRwRgIAOw==");
}
img[alt=shell]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIEAP///wAAADMzM5mZmf///wAAAAAAAAAAACH5BAEAAAQALAAAAAAUABYAQANtKLq89JAIQAO9eOjwZrAfEIbUwElYCkyXAHnfCFrlqWh4rgu2irGuCEukihk7vqQJGRtUAiYaYImKQkWzC3XomwSFScrwiyIWeejeRZrBqaVG9nbaDM9l2HwNSZfFtD1xeSR0fGEZJw9xi3EPCQA7");
}
img[alt=SQL]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIEAJmZmTMzMwAAAP///////wAAAAAAAAAAACH5BAEAAAQALAAAAAAUABYAAANrGLq89JCEQaudIb4JhBieAAwTqU1hF5JVBqGfB34l5Uqzp8aB0PebwW42ChmDliQFwOwEdylLUxA0GpVOnKzSwVK11q3024PqvEilOgsLo8HuJHumlpPpde49b0/zl2QBTYOETEAQYYkhDwkAOw==");
}
img[alt=style],img[alt=text],img[alt=JSON],img[alt=XML],img[alt=Config]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIEAP///wAAADMzM5mZmf///wAAAAAAAAAAACH5BAEAAAQALAAAAAAUABYAQANWKLq89JAIQKutI4c3r8eb9FUdJUDlaA2hkr1wLLQq0J1R6gV8T9erH5DC4gxBRtUEl6uVmCKAj0cJzK6/aWD1ymp7yOgXTPSOw7ov+qIuJ49FyHj8SAAAOw==");
}
img[alt=tar]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIFAP///zc3N7u7u1ZWVb+/v////wAAAAAAACH5BAEAAAUALAAAAAAUABYAQANhKLqsUzAWAYK9FmiwAqQYto3eVIUZtT3f6L5VC8+lOqtsZG9CdmItlM9V+4VgxRlSdgPkdK9egLOSgIScQK/HumIUvI5Mmp26esEQ+FUUmonj1JCU1l52m6QSXiAQ3G4QCQA7");
}
img[alt=Windows-Installer]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWALMIAMDAwIaGhgAAAAAAgP///wD//wD/AP//AP///wAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAgALAAAAAAUABYAQAR6EMlJq50BgDy63wKmCRlQCIIGhFcVvDBMlSmIkvAq6gFBAAcDq0UsugCeT4BVAm2QyQFolwoUCgcfoaaT0Eo/g2poLJvNTZVmeclFpezZiwRNTr3ztVodR9BGWD44GUNfBSZZYygzI00CBlcnFjQCWkAGQi03EjeLFxEAOw==");
}
img[alt=Windows-Registry]{
	background-image: url("data:image/gif;base64,R0lGODlhFAAWAKIGAP///wAAAJmZmTMzMwCAgAD//////wAAACH5BAEAAAYALAAAAAAUABYAQAN0OLq89tAMQKutIoc3gQAFARJBYAmbdF0dNUCdUAAkYZdYqmR87w+6laXzirSEpWSJc7KNSDmm5yaqmSgoqXCVVW0Bk6LxC66IvdsAcB0ke3htjO+DjcsAgSq0Lv2ElHsebXcEM1ZRXkpKF11Hbl0PipKKDwkAOw==");
}
img[alt=word]{
	background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAWCAMAAAD3n0w0AAAAVFBMVEUAAAAAAAAzMzOZmZkzM5n29fXx8fHv7+/p6enm5ubr6+vt7e3k4+Ph4eHd3d34+Pjo6Ojz8/P//v/S0uDX1+P7+/tdXa1cXKzn5/Hf3+nOz9xeXq6t4cn9AAAAAXRSTlMAQObYZgAAAK1JREFUGNN9zEkShCAQRFEpqXKkkcbZ+9+zU0pD3PQ33DwSCsorruiL1mny3hPTg+Nh59F7phDoxtGeRQaKkOJ0WMzizIFEqooSrhYx200Mpe9EP4M4LiImpRjxXrQ7rnYlUsTKLnsF69obmUPYJFFb14MiTB5rFHMamgvF5PV/EHdbfa7p+94pdjivzZBmxtyYzZz7KLa6Qw7/hecMpRlSTKZXH6TyFQGReQf8AZg5CtjcjTLSAAAAAElFTkSuQmCC");
}
		</style>
	</head>
	<body>
<?php view::section('content');?>

		<address><?php echo $_SERVER['SERVER_SOFTWARE'];?> Server at <?php echo $_SERVER['SERVER_NAME'];?> Port <?php echo $_SERVER['SERVER_PORT'];?></address>
	</body>
</html>