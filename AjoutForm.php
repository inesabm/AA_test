<!-- Cette page permet d'ajouter une nouvelle évaluation pour un patient. On arrivera sur un formulaire avec 7 box au titre prédéfini avec une mini liste déroulante pour indiquer si le test à été effectué au cours de l'entretien. Un espace de texte libre est aussi mis à disposition pour renseigner les résultats -->

<!DOCTYPE html>
<html lang="fr">

<?php


//Cette fonction doit être appelée avant tout code html
session_start();

//INCLUDE 

include("../../BDD/connexionBDD.php");
include("../../header.php");
include("../../footer.php");

if ($id_connecte == 0) {
	//erreur2(ERR_IS_CO);
}
?>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>AA TEST</title>

	<!-- Bootstrap Core CSS -->
	<link href="../../css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<!--link href="../../css/portfolio-item.css" rel="stylesheet"-->
	<link rel="stylesheet" href="../../CSS/masque.css">
	<script type="text/javascript" src="../../js/functions.js"></script>
	<!-- Script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- jQuery UI -->
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>



</head>

<script type="text/javascript" src="tableau.js"></script>

<body onbeforeunload="return confirm()">

	<!-- Script permettant d'éviter le pop-up d'avertissement de changement de page lors du clique sur le bouton "Enregistrer" -->
	<script>
		$(document).on("submit", "form", function(event) {
			window.onbeforeunload = null;
		});
	</script>



	<?php

	//Récupération de l'id de la personne connectée
	$id_user = $_SESSION['id_connecte'];
	$nom_user = $_SESSION['nom_connecte'];





	?>

	<div style="margin-top: 5%;">

		<!-- 1er tableau : informations -->
		<div style="size : 1px; color:red; margin-left:10%;">Les champs marqués par un * sont obligatoires.</div>
		<?php echo "<form method=\"POST\" action=\"../IMC/TraitementEvaluation.php?idPatient=" . $idPatient . "&idStatut=" . $id_statut . "\">";
		echo '<font size="2"  color="#012678">'; ?>
		<div id="cadrerose">

			<table width=100% cellspacing="5" cellpading="8" padding="3">
				</br>
				<!-- 1er ligne -->
				<tr style="text-align : center;">
					<td>
						<?php
						echo '<span class="obligatoire">*</span><label for="nom"> Nom : </label>';
						?>
					</td>
					<td>
						<?php
						echo '<input type="text" name="nom" id="nom" required="required" >';
						?>
                    </td>
                    <td>
						<?php
						echo '<span class="obligatoire">*</span><label for="nom"> Prénom : </label>';
						?>
					</td>
					<td>
						<?php
						echo '<input type="text" name="prenom" id="prenom" required="required" >';
						?>
                    </td>
                    <td>
						<?php
						echo '<span class="obligatoire">*</span><label for="birth"> Date de naissance : </label>';
						?>
					</td>
					<td>
						<?php
						echo '<input type="date" name="birth" id="birth" required="required" >';
						?>
					</td>
    </tr>
    <tr>

    <td>
						<?php
						echo '<span class="obligatoire">*</span><label for="profession"> Profession : </label>';
						?>
					</td>
					<td>
						<?php
						echo '<input type="text" name="profession" id="profession" required="required" >';
						?>
                    </td>
                    <td>
						<?php
						echo '<span class="obligatoire">*</span><label for="ville"> Lieu d\'habitation : </label>';
						?>
					</td>
					<td>
						<?php
						echo '<input type="text" name="ville" id="ville" required="required" >';
						?>
                    </td>
				</tr>
			</table>
			<div></div>
			</br>
		</div>

		</br>


	<!-- Partie Evaluation -->

	<!-- APTITUDE AEROBIE -->

	<div class="blocsection">

		<span class="title">

			<div id="illustration">
			</div>

			<div class="appelation">
				Activités pratiquées
			</div>
			</br>
			<div class="introduction">
				
				</br>

				</br>
				<label for="auto1"> Pratiquez vous une activité sportives ? </label>
				<input type="radio" name="radio1" id="yes" checked value="1"><label>Oui</label>
				<input type="radio" name="radio1" id="no" class="no" value="2"><label>Non</label>
				<!-- <input type="checkbox" name="auto1_" id="auto1_" value="1" onclick="formulaire_cache_visible2('cadreform_aa','cadremotif_aa')"> <label for="auto1_">Non</label> -->
			</div>
		</span>

		<div name="blocform" id="blocform">

			<div class="formulaire">

				<table width=110% cellspacing=2 cellpading=2>

					<!-- FC 1ere ligne -->

					<tr>
						<td>
							<?php
							echo '<label for="fc1"> FC à 1\' : </label> 
					<input type="number" name="fc1" id="fc1" value="" placeholder="0-300" min="0" max="300">';
							?>
						</td>
						<td>
							<?php
							echo '<label for="fc2">2\' : </label> 
					<input type="number" name="fc2" id="fc2" value="" placeholder="0-300" min="0" max="300">';
							?>
						</td>
						<td>
							<?php
							echo '<label for="fc3">3\' : </label> 
					<input type="number" name="fc3" id="fc3" value="" placeholder="0-300"  min="0" max="300">';
							?>
						</td>
						<td>
							<?php
							echo '<label for="fc4">4\' : </label> 
					<input type="number" name="fc4" id="fc4" value="" placeholder="0-300" min="0" max="300">';
							?>
						</td>
						<td>
							<?php
							echo '<label for="fc5">5\' : </label> 
					<input type="number" name="fc5" id="fc5" value="" placeholder="0-300" min="0" max="300">';
							?>
						</td>
						<td>
							<?php
							echo '<span class="obligatoire">*</span><label for="fc6">6\' : </label> 
					<input type="number" name="fc6" id="fc6" class="data_obligatoire" value="" placeholder="0-300" min="0" max="300">';
							?>
						</td>
					</tr>
				</table>
			</div>

			<div class="bloc3">
				<div class="bloccom">
				</div>
				</br>
				<?php
				echo '<input type="textarea" name="com_aa"  id="com_aa" size=125 value="" placeholder="">';
				?>
			</div>
		</div>
	</div>

	<div name="cadremotif_aa" id="cadremotif_aa" class="toggle_off">
		<center>
			<?php echo '
			<label for="motifs"> Pourquoi ?  </label>
			<select name="motifs" id="motifs" class="select" style="width : 180px;">
					<option value=""> ------ /option>
					<option value=1> Manque de temps </option>
					<option value=2> Manque d\'argent </option>
					<option value=3> Contre indication médicale </option>
					<option value=4> Manque de motivation</option>
			</select>'
			?>
		</center>
	</div>






	<!-- Bouton d'enregistrement -->


	<center>
		<input type="submit" name="valider" id="valider" value="Valider">
		</form>

			<?php echo "<button onclick=\"href=\"..VisualisationForm.php?idPatient=$idPatient\" \" style=\"margin:2%\"> Réponses </button>";
			?>
		</center>

	</div>

	</br>
	</br>
	<script src="../Patients/FormulairePrincipale.js"></script>
	<script src="../Patients/FormulaireVerification.js"></script>
	<script src="../Patients/FormulaireSelection.js"></script>


</body>

</html>