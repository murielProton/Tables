<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<?php include('Table-Head.php') ?>

<body>
	<div id="page">
		<section class="page-section height-500" role="main">
			<div class="container">
				<div class="col-md-12 col-sm-12">
					<div class="section-title text-left">
						<h2 class="title">Title of the Table hear</h2>
					</div>
					<div class="top-margin-20"></div>
					<table class="table responsive" id="sort">
						<thead>
							<!--PROBLEM THE DATES DO NOT SORT-->
							<!--TO DO Créate an SQL Table to have the oportunity for a loop FOR-->
							<tr>
								<th scope="col">Champ1</th>
								<th scope="col">Champ2</th>
								<th scope="col">Champ3</th>
								<th scope="col">Champ4</th>
								<th scope="col">Champ5</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td data-table-header="Title">Parent</td>
								<td data-table-header="Authors">358156</td>
								<td data-table-header="Journal">Family Relations</td>
								<td data-table-header="Date">Jan. 2017</td>
								<td data-table-header="Link"><a href="" target="_blank" title=""><i aria-hidden="true" class="fa fa-external-link">&nbsp;</i></a></td>
							</tr>
							<tr>
								<td data-table-header="Title">Prescription</td>
								<td data-table-header="Authors">458</td>
								<td data-table-header="Journal">Advances</td>
								<td data-table-header="Date">Jan. 2017</td>
								<td data-table-header="Link"><a href="" target="_blank" title=""><i aria-hidden="true" class="fa fa-external-link">&nbsp;</i></a></td>
							</tr>
							<tr>
								<td data-table-header="Title">Relation</td>
								<td data-table-header="Authors">4258</td>
								<td data-table-header="Journal">Advances</td>
								<td data-table-header="Date">Jan. 2017</td>
								<td data-table-header="Link"><a href="" target="_blank" title=""><i aria-hidden="true" class="fa fa-external-link">&nbsp;</i></a></td>
							</tr>
							<tr>
								<td data-table-header="Title">Benefits</td>
								<td data-table-header="Authors">123</td>
								<td data-table-header="Journal">Hypertension</td>
								<td data-table-header="Date">Jan. 2017</td>
								<td data-table-header="Link"><a href="" target="_blank" title=""><i aria-hidden="true" class="fa fa-external-link">&nbsp;</i></a></td>
							</tr>
							<tr>
								<td data-table-header="Title">Overexpression</td>
								<td data-table-header="Authors">258</td>
								<td data-table-header="Journal">American</td>
								<td data-table-header="Date">Jan. 2017</td>
								<td data-table-header="Link"><a href="" target="_blank" title=""><i aria-hidden="true" class="fa fa-external-link">&nbsp;</i></a></td>
							</tr>
							<tr>
								<td data-table-header="Title">Observed</td>
								<td data-table-header="Authors">2597</td>
								<td data-table-header="Journal">Child</td>
								<td data-table-header="Date">Feb. 2017</td>
								<td data-table-header="Link"><a href="" target="_blank" title=""><i aria-hidden="true" class="fa fa-external-link">&nbsp;</i></a></td>
							</tr>
							<tr>
								<td data-table-header="Title">Testing</td>
								<td data-table-header="Authors">15974</td>
								<td data-table-header="Journal">Personal</td>
								<td data-table-header="Date">Feb. 2017</td>
								<td data-table-header="Link"><a href="" target="_blank" title=""><i aria-hidden="true" class="fa fa-external-link">&nbsp;</i></a></td>
							</tr>
							<tr>
								<td data-table-header="Title">Personal</td>
								<td data-table-header="Authors">156258</td>
								<td data-table-header="Journal">Minority</td>
								<td data-table-header="Date">Feb. 2017</td>
								<td data-table-header="Link"><a href="" target="_blank" title=""><i aria-hidden="true" class="fa fa-external-link">&nbsp;</i></a></td>
							</tr>
							<tr>
								<td data-table-header="Title">School</td>
								<td data-table-header="Authors">123</td>
								<td data-table-header="Journal">Geofrey</td>
								<td data-table-header="Date">Feb. 2017</td>
								<td data-table-header="Link"><a href="" target="_blank" title=""><i aria-hidden="true" class="fa fa-external-link">&nbsp;</i></a></td>
							</tr>
							<tr>
								<td data-table-header="Title">Efficacyss</td>
								<td data-table-header="Authors">15934</td>
								<td data-table-header="Journal">Research</td>
								<td data-table-header="Date">March 2017</td>
								<td data-table-header="Link"><a href="" target="_blank" title=""><i aria-hidden="true" class="fa fa-external-link">&nbsp;</i></a></td>
							</tr>
							<tr>
								<td data-table-header="Title">restores</td>
								<td data-table-header="Authors">8742</td>
								<td data-table-header="Journal">Coquelico</td>
								<td data-table-header="Date">March 2017</td>
								<td data-table-header="Link"><a href="" target="_blank" title=""><i aria-hidden="true" class="fa fa-external-link">&nbsp;</i></a></td>
							</tr>
							<tr>
								<td data-table-header="Title">Macronutrient</td>
								<td data-table-header="Authors">258</td>
								<td data-table-header="Journal">Current</td>
								<td data-table-header="Date">May 2017</td>
								<td data-table-header="Link"><a href="" target="_blank" title=""><i aria-hidden="true" class="fa fa-external-link">&nbsp;</i></a></td>
							</tr>
							<tr>
								<td data-table-header="Title">Romantic</td>
								<td data-table-header="Authors">3</td>
								<td data-table-header="Journal">Mindfulness</td>
								<td data-table-header="Date">April 2017</td>
								<td data-table-header="Link"><a href="" target="_blank" title=""><i aria-hidden="true" class="fa fa-external-link">&nbsp;</i></a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="text-orange bold col-md-12 col-xs-12 text-center top-margin-20">Muriel Proton Novembre - 2020</div>
			</div>
			<!--END DIV CLASS CONTAINER-->
		</section>
		<!--END <section class="page-section height-500" role="main">-->
	</div>
	<!--END <div id="page">-->
	<?php include('Table-Scripts.php') ?>
</body>

</html>