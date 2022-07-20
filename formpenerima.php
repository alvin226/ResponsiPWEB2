<html>
	<head>
		<title>Data Penerima Paket</title>
		<link rel="stylesheet" href="edit.css">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		
	</head>

	<body>
		 
        <SCRIPT language="JavaScript">
            function hitungjarak(){
                var jarak = parseFloat(document.form1.ijarak.value);
                var total =0.0; 
                if (jarak>=1){
                    total =jarak*3500;
                }else{
                    total =3500;
                }
                    document.form1.ototal.value=eval(total);
            }      
        </SCRIPT>
        <header>
        	 <div class="fullscreen-bg">
            <video loop muted autoplay poster="poster.jpg" class="fullscreen-bg__video">
                <source src="ugm.mp4" type="video/mp4">
            </video>
           
        </header>
        
         <h1> Data Penerima Barang Jasa Kurir Dnter </h1>
         

		
			<form name="form1" method="post" action="proses.php">
            <table  width="0" border="0" align="center">
                <tr>
                    <td>
				<table bgcolor="#c6d4e1"  width="50%" border="0" align="center">
					<tr>
						<td>Nama Lengkap:</td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>

					<tr>
						<td>Alamat:</td>
						<td><input name="alamat" type="text" id="alamat"></td>
					</tr>

					<tr>
						<td>E-Mail:</td>
						<td><input name="email" type="text" id="email"></td>
					</tr>

					<tr>
                        <td>Input Estimasi Jarak antar:</td>
                        <td><input name="ijarak" size="10" type="text" id="ijarak"> Km (Per-Km = Rp.5000)</td>
                    </tr>

                    <tr>
                        <td>Total:</td>
                        <td><input type="text" size="10" name="ototal" id="ototal" ></td>
                    </tr>

					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
                            <input type="button" value="Cek Total" onclick="hitungjarak()">
					    </td>
					</tr>
				</table>
            </td>
        </tr>
            </table>
			</form>
			
		<div align="center"><strong><a href="lihat.php" >::Lihat Data Penerima:
		</a></strong><div>
	</body>
</html>