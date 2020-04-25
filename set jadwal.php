<!DOCTYPE html>
<html>
<head>
	<title>Set Jadwal</title>
	<link rel="stylesheet" type="text/css" href="setjadwal.css">
</head>
<body>
	<br>
	<br>
	<br>
		<h1 align="center"> SET JADWAL AKTIVITAS PESERTA DIDIK SMK WIKRAMA</h1>
	<div class="Set Jadwal"></div>
		<div class="setjadwal"></div>


<form method="post">
		<table align="center">
		
		<br>
		<tr>
			<td>
				<label class="Nis">Nis : </label>
			</td>
		</tr>
		<br>
		<br>
		<tr>
			<td>
			<label class="Nama">Nama : </label>
		</td>
		<br>
		<br>
		</tr>
     
		</table>

		
			<form method = "post">
		<table align="center">
			<tr>
			<td>

                <Label>Hari </Label>

                <select class="form-control" name="jk">
                    <option value = ""> Senin </option>
                    <option value =""> Selasa</option>
                    <option value="">Rabu</option>
                    <option value="">Kamis</option>
                    <option value="">jumat</option>
                    <option value="">Sabtu</option>
                    <option value="">Minggu</option>

                </select>
            </td>
        </tr>
        <tr>
        	<td>
        		 <label>Tanggal Kejadian </label>

                <input type="date" name="tanggal" class="form-control" >
            </td>
        </tr>
        <tr>
				<td>
					<strong class="Waktu">Waktu</strong>
				</td>
			</tr>
			<tr>
				<td>
					Mulai
				</td>
				<br>
				<td>
				<input type = "time" name = "">
			</td>
			</tr>
			<tr>
				<td>
					Akhir
				</td>
				<br>
				<td>
				<input type = "time" name = "">
			</td>
			</tr>
			<tr>
				<td>
					Aktivitas
				</td>
				<br>
				<td>
				<input type = "text" name = "">
			</td>
			</tr>
			<tr>
				<td>
			
                <Label>Implementasi Mata Pelajaran</label>

                <select class="form-control" name="jk">
                    <option value = ""> PA-BP </option>
                    <option value =""> PPKn</option>
                    <option value="">PJOK</option>

                </select>
            </Label>
        </td>
    </tr>
       
     
    
		</table>
	</form>

		
	</form>

</div>
</body>
</html>

