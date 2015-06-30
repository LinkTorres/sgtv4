<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Acta</title>
	
	
	<style type="text/css">
		body{
			font-family: Calibri;
			font-size: 9pt;
			line-height: normal;

			}
		.titulo{
			font-weight: bold;
			text-align: center;
		}
		.carrera{
			font-weight: bold;
			font-size: 11pt;
			text-align: center;
		}
		.jurado{
			font-weight: bold;
			text-align: left;
		}
		.negrita{
			font-weight: bold;
		}
		.centrado{
			text-align: center;
		}
		.justificado{
			text-align: justify;
		}

	</style>


</head>

<body>
	<table>
		<tr>
			<td><img src="ipn.png"></td>
			
			<td colspan="3" class="titulo"><p>INSTITUTO POLITÉCNICO NACIONAL<br>ESCUELA SUPERIOR DE CÓMPUTO<br>ACTA DE EXAMEN PROFESIONAL</p></td>
			
			<td><img src="escom.png"></td>
		</tr>
		<tr>
			<td colspan="5"><p>En la Ciudad de Mexico,siendo las {{ $hora_inicio }} horas del dia {{ $dia }}, del mes de {{ $mes }} del año {{ $anio }} se reunieron en el auditorio principal de la Escuela Superior de Cómputo los CC:</p></td>
		</tr>
		<tr>
			<td ><p>Presidente:    <br>Secretario:    <br>1er.  Vocal:    <br>2do.  Vocal:    <br>3er.  Vocal:    </p></td>
			<td class="jurado"><p>{{ $director }}<br>{{ $director2 }}<br>{{ $sinodal1 }}<br>{{ $sinodal2 }}<br>{{ $sinodal3 }}</p></td>
			<td colspan="2"></td>
			<td  rowspan="3"><img src="foto.png"></td>
		</tr>
		<tr>
			<td colspan="4"><p>Como Integrantes del Jurado para sancionar el Exámen Profesional, mediante la opción de titulación {{ $opcion }},para obtener el Título Profesional corrrespondiente al programa académico de :</p></td>
			
		</tr>
		<tr>
			<td class="carrera" colspan="4"><p>{{ $carrera }}</p></td>
		</tr>
		<tr>
			<td colspan="4" rowspan="2">
				<p>De ART C. <strong>{{ $nombre }} {{ $apellidoP }} {{ $apellidoM }}</strong></p>
				<p class="justificado">De acuerdo a lo establecido en el articulo 41 del Reglamento de Titulación Profesional del Instituto Politécnico Nacional,el jurado ha deliberado y acordado APROBAR{{ $genero }}. Acto seguido el Secretario del Jurado hizo saber al sustentante el resultado, tomando el Presidente la protesta de ley correspondiente.Se levanta la presente acta, que firman los CC. integrantes del jurado para los efectos legales procedentes, por lo que se da por terminado este acto a las {{ $hora_fin }} hrs. del mismo dia</p>
			</td>
			<td class="centrado"><p>Boleta No.:<br>{{ $boleta }}</p></td>
		</tr>
		<tr>
			<td class="centrado"><p>Acta No.:<br>{{ $acta }}</p></td>
		</tr>
		<tr>
			<td class="centrado" colspan="2"><p>PRESIDENTE</p><br><p>_____________________________<br><strong>{{ $director }}</strong><br>{{ $cedulaDirector }}</p></td>
			<td></td>
			<td class="centrado"><p>SECRETARIO</p><br><p>_____________________________<br><strong>{{ $director2 }}</strong><br>{{ $cedulaDirector2 }}</p></td>
			<td rowspan="2"></td>
		</tr>
		<tr>
			<td class="centrado" colspan="2"><p>1er. Vocal</p><br><p>_____________________________<br><strong>{{ $sinodal1 }}</strong><br>{{ $cedulaSinodal1 }}</p></td>
			<td class="centrado"><p>2er. Vocal</p><br><p>_____________________________<br><strong>{{ $sinodal2 }}</strong><br>{{ $cedulaSinodal2 }}</p></td>
			<td class="centrado"><p>3er. Vocal</p><br><p>_____________________________<br><strong>{{ $sinodal3 }}</strong><br>{{ $cedulaSinodal3 }}</p></td>
		</tr>
		<tr>
			<td colspan="5"><p>Los suscritos Director y Subdirector Académico,avalan que las firmas que anteceden son auténticas y corresponden a las personas cuyos nombres aparecen en esta acta.</p></td>
		</tr>
		<tr>
			<td class="centrado" colspan="2"><p>SUBDIRECTOR ACADEMICO</p><br><p>_____________________________<br><strong>Andrés Ortigoza Campos</strong></p></td>
			<td></td>
			<td class="centrado" colspan="2"><p>DIRECTOR</p><br><p>_____________________________<br><strong>Flavio Arturo Sánchez Garfias</strong></p></td>
		</tr>
	</table>
</body>

</html>