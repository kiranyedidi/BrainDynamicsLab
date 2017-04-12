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
	<body id="research">
		<?php include_once 'includes/header.php';?>
		
		<!-- Research page content starts here -->
		<div class="container-fluid">
			<div>
				<h1 class="page-header">Research</h1>
			</div>
			<h3>Goal</h3>
			<p>The <i>primary</i> goal is to design and implement novel methodology and advanced signal processing 
			techniques to monitor, process and model the electrical and magnetic activity recorded from the brain for the 
			purpose of timely warning and intervention to avert catastrophic state transitions like epileptic seizures, 
			status epilepticus, strokes, migraines, sleep apneas and other medical emergencies. The <i>secondary</i> goal is to 
			interface the developed products with existing devices in biomedical industry used for the monitoring and treatment 
			of the respective disorders, diseases and emergencies.</p>
			<h3>Significance</h3>
			<p>Abrupt disruptions of the normal electrical activity of the brain result into devastating medical 
			conditions that may require immediate treatment. About 1% of the world's population develops epileptic seizures in a 
			lifetime due to genetic or acquired insults to the brain. Epileptic seizures are manifestations of epilepsy, a serious 
			brain dynamical disorder second only to strokes. Of the world's ~50 million people with epilepsy, fully 1/3 have seizures 
			that are not controlled by anti-convulsant medication. The field of seizure prediction, in which engineering technologies 
			are used to decode brain signals and search for precursors of impending epileptic seizures, holds great promise to elucidate 
			the dynamical mechanisms underlying the disorder, as well as to enable implantable devices to intervene in time to treat 
			epilepsy. There is currently an explosion of interest in this field in academic centers and medical industry with clinical 
			trials underway to test potential prediction and intervention devices for FDA approval. Therefore, development of algorithms 
			and devices that, based on early detection of precursors to such apparently abrupt episodes, could issue on-time warnings and 
			trigger on-demand interventions is of emerging importance. We are one of the leading research groups in the world in this 
			effort.</p>
			
			<!-- Accordian for researches -->
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a class= "collapsed" data-toggle="collapse" data-parent="#accordion" href="#normalbrain">Normal Brain</a>
						</h4>
					</div>
					<div id="normalbrain" class="panel-collapse collapse">
						<div class="panel-body">
							<p>Our current research in cognition and cortical plasticity in primates (collaboration with Dr. He, supported 
							by DARPA, see CV), utilizing our concepts and algorithms, looks very promising (see Narayanan et al. in CV). 
							The underlying hypothesis is that communication inside the brain occurs via dynamical synchronization or dynamical 
							entrainment of pertinent cortical sites. The spatiotemporal image of such communications could be captured by 
							increased time resolution fMRI and/or simultaneous recordings of EEG. Design of similar experiments with normal 
							human subjects is presently under development in the Brain Dynamics Laboratory. This research will be supported 
							in part by a recently submitted NIH RO1 grant ("Bioengineering Epilepsy: Dynamical Analysis of Scalp EEG", see CV). 
							Recordings and analysis of the EEG from normal subjects are therein proposed.</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#epilepticbrain">Epileptic Brain</a>
						</h4>
					</div>
					<div id="epilepticbrain" class="panel-collapse collapse">
						<div class="panel-body">
							<p>Development of the nonlinear dynamical and global optimization techniques to completely characterize the brain's 
							spatiotemporal dynamics during the transition to epileptic seizures in humans and rodent models:</p>
							<ul>
								<li>At the macroscopic (EEG and field potential) level.</li>
								<li>At the microscopic (AP trains) level using in vitro hippocampal slices and measuring individual firing of neurons under various conditions (e.g. low-Ca2+).</li>
							</ul>
							<p>This research will involve scientists from Basic Neuroscience, Clinical Neurophysiology and Signal Processing 
							(including pattern recognition, system modeling and optimization), Circuitry and Instrumentation.</p>
							<h3>Research Approach</h3>
							<ul>
								<li>Identification of seizure precursors in "status epilepticus" and hyperthermia induced febrile seizures.</li>
								<li>Modeling of the epileptic transition via nonlinear chaotic models and neural networks.</li>
								<li>Control of the epileptic transition.</li>
								<li>Design and development of a microdevice to intervene and abort epileptic seizures in real time.</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#otherbiodynamicaldisorder">Other Biodynamical Disorder</a>
						</h4>
					</div>
					<div id="otherbiodynamicaldisorder" class="panel-collapse collapse">
						<div class="panel-body">
							<p>Brain dynamical disorders other than epilepsy exist and may also be characterized by intermittent neurophysiologic
							 transitions from normal to abnormal states (e.g. narcolepsy, migraine, anesthesia). Catastrophic cardiovascular 
							 transitions (e.g. strokes, heart attacks) also exist. Every year about 1.1 million Americans suffer a heart attack, 
							 about 460,000 of these heart attacks are fatal. EEG data from the former disorders will be sought and analyzed dynamically 
							 (collaboration with BNI and UA). The latter disorder will be analyzed in collaboration with Dr. Sweeney of our Department 
							 and his pig models. In both investigations the overall goal will be to explore the utility of similar approaches to the 
							 ones I have used in epilepsy, to further characterize and understand the dynamical mechanisms underlying these disorders, 
							 and to develop and test novel approaches in the diagnostic, prediction and treatment (intervention / control) domain.</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a class="collapsed" data-parent="#accordion" href="#genomicsignalprocessing" data-toggle="collapse">Genomic Signal Processing</a>
						</h4>
					</div>
					<div id="genomicsignalprocessing" class="panel-collapse collapse">
						<div class="panel-body">
							<p>Advanced techniques from the processing of brain signals may be helpful in the analysis of the DNA signals. 
							Towards this goal, since 2002, we collaborated with Dr. Spanias (Electrical Engineering, ASU) and TGen Inc. 
							(Phoenix) for the application of modern signal processing techniques to the identification of exons and introns 
							of genes in long DNA sequences from prokaryotic and eukaryotic cells. Entropy-based methods from information theory 
							and nonlinear dynamics (Kolmogorov entropy, Transfer entropy, Lyapunov exponents and Cross-Lyapunov exponents), 
							that are used to characterize our EEG signals, will be implemented to provide enhanced similarity measures between 
							different DNA segments.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Footer -->
		<?php include_once 'includes/footer.php';?>
		
	</body>
</html>
