<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Brain Dynamics Lab</title>
		<link rel="shortcut icon" href="images/garland_logo.gif" type="image/x-icon" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script type="text/javascript" src="script.js"></script>
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />		
	</head>
	<body id="resources">
		<?php include_once 'includes/header.php';?>
		
		<!-- Resources page content starts here -->
		<div class="container-fluid">
			<div>
				<h1 class="page-header">Resources</h1>
			</div>
			<p>The Brain Dynamics Laboratory (BDL) at Louisiana Tech University was transferred from Arizona State University (ASU) 
			in July 2012. (The Lab was first established at Arizona State University in 2000). It is a research (recording and computational) 
			facility for investigations in the dynamics of electrical and magnetic signals from the surface and interior of the human and animal 
			brain. The computational algorithms used toward this goal include conventional (e.g. ARMA and linear filters, principal components, 
			time-frequency and wavelet transforms), as well as innovative (nonlinear modeling, nonlinear measures of stability and complexity) 
			signal processing techniques and software. The Lab also is used as a resource in the teaching of undergraduate and graduate courses 
			in biomedical signal processing. MatLab and its signal processing and control toolboxes, Mathematica, MathCad, Labview, C/C++, Fortran 
			are among the programming languages we use concurrently with other commercially available software (e.g. SAS). The Lab has so far been 
			particularly successful in the detection, prediction and control of epileptic seizures, epileptogenic focus localization, as well as in 
			the development of novel measures of nonlinear dynamics to quantify functional interactions and estimate the information transfer among 
			brain sites and structures.</p>
			
			<!-- Accordian for researches -->
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#mathematical">Mathematical and Technical Tools</a>
						</h4>
					</div>
					<div id="mathematical" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								<li>Mathematical analysis of brain electrical and magnetic activity within the framework of nonlinear spatiotemporal 
								dynamics (Individual Lyapunov exponents, Cross-Lyapunov exponents, Transfer of Entropy, dynamical coupling/entrainment)</li>
								<li>Use of Global Optimization techniques in signal processing. Recent application of such methods to EEG analysis has 
								resulted to a deeper understanding and improvement of epileptogenic focus localization and seizure prediction.</li>
								<li>Theory of chaos for strongly coupled and spatially distributed mathematical, physical and biological systems 
								(e.g. coupled nonlinear maps, coupled laser arrays and networks of neurons respectively). Identification of the critical 
								parameters and controllability of the phase transitions of these systems.</li>
								<li>Development of fast digital signal processing algorithms for real time estimation of indices of chaoticity and complexity
								 of complex signals.</li>
								<li>Advanced multi-dimensional digital signal processing techniques for analysis of nonstationary signals and images 
								(e.g. Time-Frequency and Wavelet transforms, Kalman filtering, KL transform).</li>
								<li>Analysis of single-trial evoked potentials and event responses of the nervous system to visual, auditory, electrical 
								and mechanical stimuli at the macroscopic and microscopic level. Issue of nonstationarity.</li>
								<li>Design of biomedical (implanted or portable) devices (BioMEMS) for: a) measurement, b) amplification, c) analysis of 
								biological and clinical signals of interest (e.g. EEG, MEG, MRI, ultrasound) and d) control and intervention for therapeutic 
								purposes (e.g. via electromagnetic stimulators).</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#performancecomputing">High Performance Computing</a>
						</h4>
					</div>
					<div id="performancecomputing" class="panel-collapse collapse">
						<div class="panel-body">
							<p>The Lab has access to the Louisiana Optical Network Initiative (LONI). The LONI is a statewide environment that integrates 
							and aggregates Louisiana’s considerable strength that is distributed across its universities and industries. It provides 7 
							high-performance computing clusters interconnected via the LONI fiber backbone and dedicated to furthering the efforts of 
							researchers throughout Louisiana. Each of these systems has been deployed at a LONI member institution. Consultation and 
							administrative support for the LONI systems is provided by HPC @ LSU. </p>
							<p><b>LONI</b> network’s supercomputers are:</p>
							<p><b><i>Queen Bee:</i></b> A 50.7 TFlops peak performance cluster from Dell. Contains 680 nodes, each with 2 Quad-Core 2.33 GHz Intel Xeon 
							64bit processors running Red Hat Enterprise Linux (RHEL) v4. Memory is 8 GB RAM per node. Housed at the state's Information 
							Systems Building.</p>
							<p><b><i>Eric:</i></b> A 4.772 TFlops peak performance cluster from Dell. Contains 128 nodes, each with 2 Dual-Core 2.33 GHz Intel Xeon 64bit processors 
							running Red Hat Enterprise Linux (RHEL) v4. Memory is 4 GB RAM per node. Housed at LSU.</p>
							<p><b><i>Oliver:</i></b> A 4.772 TFlops peak performance cluster from Dell. Contains 128 nodes, each with 2 Dual-Core 2.33 GHz Intel Xeon 64bit processors running Red 
							Hat Enterprise Linux (RHEL) v4. Memory is 4 GB RAM per node. Housed at ULL.</p>
							<p><b><i>Louie:</i></b> A 4.772 TFlops peak performance cluster from Dell. Contains 128 nodes, each with 2 Dual-Core 2.33 GHz Intel Xeon 64bit processors running Red Hat Enterprise 
							Linux (RHEL) v4. Memory is 4 GB RAM per node. Housed at Tulane.</p>
							<p><b><i>Poseidon:</i></b> A 4.772 TFlops peak performance cluster from Dell. Contains 128 nodes, each with 2 Dual-Core 2.33 GHz Intel Xeon 64bit processors running Red Hat Enterprise Linux 
							(RHEL) v4. Memory is 4 GB RAM per node. Housed at UNO.</p>
							<p><b><i>Painter:</i></b> A 4.772 TFlops peak performance cluster from Dell. Contains 128 nodes, each with 2 Dual-Core 2.33 GHz Intel Xeon 64bit processors running Red Hat Enterprise Linux (RHEL) v4. 
							Memory is 4 GB RAM per node. Housed at LA Tech.</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#labfacility">Lab Facility</a>
						</h4>
					</div>
					<div id="labfacility" class="panel-collapse collapse">
						<div class="panel-body">
							<p>The computational facility of the Lab occupies 600 sq. ft. on the first floor of the Biomedical Engineering Building (BMEB) with space for up to 12 computer stations and other technical equipment 
							(see Equipment section below). Adjacent to the computational facility is the EEG recording chamber that occupies an area of 400 sq. ft with 2 recording EEG machines and 1 complete EEG system for 
							evoked potential recording and analysis (see Equipment section below). Since its transfer from Arizona State University in 2012, the Lab already supports 1 research assistant professor, 5 graduate 
							students and a score of undergraduate students. BMEB is located on the main campus of Louisiana Tech University (LA Tech) in Ruston, Louisiana.</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#researchgrants">Research Grants</a>
						</h4>
					</div>
					<div id="researchgrants" class="panel-collapse collapse">
						<div class="panel-body">
							<p>This research thrust area is currently funded through NIH, DARPA private organizations (e.g. Epilepsy Foundation of America, Whitaker Foundation) and seed grants from ASU. Details of the major 
							grants are given below. New proposals to NIH, NSF, DARPA, and private companies and organizations (e.g. Medtronic, Cyberonics) are under way. Use of the SBIR mechanism for collaboration with new 
							or existing companies is also under way. This research is protected by the following patents:</p>
							<ul>
								<li><b>Seizure warning and prediction</b> (awarded 10/16/01 - US Patent and Trademark Office – No. 6,304,775).</li>
								<li><b>Analysis of EEG data using optimization, statistics and dynamical systems techniques</b> (submitted 08/27/02 - US Provisional patent 60/406063).</li>
								<li><b>Adaptive system and method for predicting seizures and other state transitions</b> (09/20/02 - US Provisional patent 60/414364).</li>
							</ul>
							<p><b>Five</b> more patent applications are submitted on area at works.</p>
							<div class="table-responsive">
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td>NSF</td>
											<td>Closed-loop control of brain dynamics in epilepsy</td>
										</tr>
										<tr>
											<td>Research Epilepsy Foundation of America</td>
											<td>Seizure Control by Closed Loop Feedback in a Rat Model of Chronic Temporal lobe Epilepsy</td>
										</tr>
										<tr>
											<td>NINDS R01</td>
											<td>On-line Real-Time Seizure Prediction</td>
										</tr>
										<tr>
											<td>NIH RO1</td>
											<td>Bioengineering Epilepsy: Dynamical Analysis of Scalp EEG</td>
										</tr>
										<tr>
											<td>NIH BRP R01 NS39687</td>
											<td>Bioengineering Research Partnership for Brain Dynamics</td>
										</tr>
										<tr>
											<td>DARPA MDA972-00-1</td>
											<td>Advanced Neural Implants and Control</td>
										</tr>
										<tr>
											<td>VA Merit Grant</td>
											<td>Dynamical mechanisms initiating temporal lobe seizures</td>
										</tr>
										<tr>
											<td>NIH-NINDS R01 NS31451-05</td>
											<td>Dynamical studies in temporal and frontal lobe epilepsy</td>
										</tr>
										<tr>
											<td>NIH-NINDS R01 NS31451</td>
											<td>Dynamical studies in temporal lobe epilepsy</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collaborations">Collaborations</a>
						</h4>
					</div>
					<div id="collaborations" class="panel-collapse collapse">
						<div class="panel-body">
							<p><b>Arizona State University</b></p>
							<ul>
								<li><em>Jiping He</em>, Ph.D., Professor, Department of Bioengineering, Arizona State University, Tempe, AZ (2000 – present). <em>Prosthetics, Spinal Cord Rehabilitation, Adaptation, Cognition</em></li>
								<li><em>Konstantinos Tsakalis</em>, Ph.D., Associate Professor, Department of Electrical Engineering, Arizona State University, Tempe, AZ (2000 – present). <em>Control of Systems</em></li>
								<li><em>Andreas Spanias</em>, Ph.D., Professor, Department of Electrical Engineering, Arizona State University, Tempe, AZ (2000 – present). <em>Classical Signal Processing + Communications</em></li>
								<li><em>Jennie Si</em>, Ph.D., Professor, Department of Electrical Engineering, Arizona State University, Tempe, AZ (2000 – present). <em>Neural Networks + Pattern Recognition</em></li>
								<li><em>Bruce Towe</em>, Ph.D., Professor, Department of Bioengineering, Arizona State University, Tempe, AZ (2000 – present). <em>Bioinstrumentation + Microdevices</em></li>
								<li><em>Frank Hoppenstead</em>, Ph.D. Professor, Director of the Center for Systems Science and Engineering Research, Departments of Electrical Engineering and Mathematics, Arizona State University, Tempe, AZ (2000 – present). <em>Neural Networks + Modeling</em></li>
								<li><em>Jim Sweeney</em>, Ph.D., Associate Professor and Associate Chair, Department of Bioengineering, Arizona State University, Tempe, AZ (2000 – present). <em>ECG, Pacemakers and Defibrillators</em></li>
							</ul>
							<p><b>Barrow Neurological Institute, Arizona</b></p>
							<ul>
								<li><em>Jie Wu</em>, Ph.D., M.D., Associate Professor and Director, Epilepsy Research, Barrow Neurological Institute, Phoenix, AZ (2001 – present). <em>Epilepsy, Neurophysiology, Animal models.</em></li>
								<li><em>David Treiman</em>, M.D., Professor and Director, Division of Clinical Epilepsy, Department of Neurology, Barrow Neurological Institute and St. Joseph’s Hospital, Phoenix, AZ (2002 – present). <em>Epilepsy Monitoring Unit, Clinical Neurophysiology.</em></li>
							</ul>
							<p><b>The University of Michigan</b></p>
							<ul>
								<li><em>William J. Williams, Ph.D.</em>, Professor, Department of Electrical Engineering & Computer Science and Bioengineering Program, The University of Michigan, Ann Arbor, MI (1984 -present). <em>Digital Signal Processing, Time Frequency and Wavelet Transforms.</em></li>
								<li><em>Daryl Kipke, Ph.D.</em>, Associate Professor, Department of Biomedical Engineering, The University of Michigan, Ann Arbor, MI (2000 - present). <em>Neural Plasticity, Man-Machine Interfaces, Bio-electrodes</em></li>
							</ul>
							<p><b>The University of Florida</b></p>
							<ul>
								<li><em>Panos M. Pardalos, Ph.D.</em>, Professor, Department of Industrial and Systems Engineering, University of Florida, Gainesville, FL (1993 – present). <em>Global Optimization, Modeling.</em></li>
								<li><em>Jose C. Principe, Ph.D.</em>, Professor, Department of Electrical and Computer Engineering, University of Florida, Gainesville, FL (1993 - present). <em>Neural Networks, IC Design.</em></li>
								<li><em>John G. Harris, Ph.D.</em>, Associate Professor, Department of Electrical and Computer Engineering, University of Florida, Gainesville, FL (1999 – present). <em>BioMEMS, IC Design.</em></li>
								<li><em>Mark Yang, Ph.D.</em>, Professor, Department of Statistics, University of Florida, Gainesville, FL (1996 – present). <em>Parametric and Nonparametric statistical analysis.</em></li>
								<li><em>Zongan Qiu, Ph.D.</em>, Associate Professor, Department of Physics, University of Florida, Gainesville, FL (1998 – 2000). <em>Statistical Physics, Phase Transitions.</em></li>
								<li><em>J. Chris Sackellares, M.D.</em>, Professor, Departments of Neurology, Neuroscience and the Bioengineering Program, University of Florida, Gainesville, FL (1986 – present). <em>Neurology, Epilepsy.</em></li>
								<li><em>Paul Carney, M.D.</em>, Assistant Professor, Departments of Pediatrics and Neuroscience University of Florida, Gainesville, FL (1999 – present). <em>Neurology, Sleep, Epilepsy, Animal models.</em></li>
								<li><em>Robin L. Gilmore, M.D.</em>, Professor, Director of the Epilepsy Monitoring Unit, Departments of Neurology, Pediatrics and Neuroscience, University of Florida, Gainesville, FL (1993 – 2000). <em>Neurology, Epilepsy.</em></li>
								<li><em>Steven N. Roper, M.D.</em>, Professor, Department of Neurological Surgery,University of Florida, Gainesville, FL (1993 – present). <em>Neurosurgery, Epilepsy Surgery.</em></li>
								<li><em>Richard J. Melker, M.D., Ph.D.</em>, Professor, Departments of Anesthesiology and Pediatrics, University of Florida, Gainesville, FL (1998 – present). <em>EEG and Anesthesia.</em></li>
								<li><em>Johannes H. Van Oostrom, Ph.D.</em>, Assistant Professor, Department of Anesthesiology, University of Florida, Gainesville, FL (1999 – present). <em>Medical Instrumentation.</em></li>
							</ul>
							<p><b>Other Major Collaborators</b></p>
							<p><b>The University of Virginia</b></p>
							<ul>
								<li><em>Jaideep Kapur, M.D., Ph.D.</em>, Assistant Professor, Department of Neurology, University of Virginia, Charlottesville, VA (1999 – 2001). <em>Epilepsy Animal Models.</em></li>
							</ul>
							<p><b>Stanford University</b></p>
							<ul>
								<li><em>Robert Fisher, M.D.</em>, Professor and Chair, Department of Neurology, Stanford University, Stanford, CA (2002 – present). <em>Epilepsy, Control and stimulation studies.</em></li>
							</ul>
							<p><b>University of Bonn</b></p>
							<ul>
								<li><em>Klaus Lehnertz, Ph.D.</em>, Director Neurophysics Group, Department of Epileptology, Medical Center, University of Bonn, Bonn, Germany (2001 – present). <em>Epileptic Seizure Prediction.</em></li>
							</ul>
							<p><b>The Free University of Amsterdam</b></p>
							<ul>
								<li><em>Stiliyan Kalitzin, Ph.D.</em>, Head of Medical Physics Department, Amsterdam, Netherlands (2001 – present). <em>Epileptic Seizure Prediction.</em></li>
								<li><em>Demetris Velis, M.D.</em>, Head of Neurology, Epileptology Clinic, Amsterdam, Netherlands (2001 – present). <em>Epileptic Seizure Prediction, Neurological Disorders.</em></li>
							</ul>
							<p><b>The National Center for Scientific Research (CNRS) of France</b></p>
							<ul>
								<li><em>Michel Le Van Quyen, Ph.D.</em>, National Center of Scientific Research (CNRS), Institute of Federal Research in Neurosciences (IFNRS), Paris, France (2001 – present). <em>Epileptic Seizure Prediction.</em></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Footer -->
		<?php include_once 'includes/footer.php';?>
		
	</body>
</html>
