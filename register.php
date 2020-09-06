<?php
define('TITLE',"Register");
require_once('config.php');
require_once('includes/public_functions.php');
require_once('includes/registration_login.php');
require_once('includes/head_public.inc.php');
?>

<main role="main">
	<section class="jumbotron text-center">
		<h2 class="md-header">Register on e-MDGAS</h2>
    </section>
	<section class="container">
		<div class="reg-box">
			<form method="post" action="register.php" class="needs-validation" novalidate oninput='password_2.setCustomValidity(password_1.value != password_2.value ? "Passwords do not match." : "")'>
				<?php include('includes/errors.php') ?>
				<div class="reg-confirmation"></div>
				<div class="reg-slider">
					<div class="reg-slides">
						<div id="reg-slide-1">
							<div class="reg-bg">
								<div class="form-group">
									<input type="text" class="form-control" name="username" value="<?php echo $username; ?>"  placeholder="Username" id="username" required>
									<div class="invalid-feedback">Please provide your username.</div>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" value="<?php echo $email ?>" placeholder="Email" id="email" required>
									<div class="invalid-feedback">Please provide your email.</div>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="password1" title="Password must have at least 8 characters including: at least 1 uppercase character, 1 lowercase character and numeric characters." required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8" name="password_1" placeholder="Password" required>
									<div class="invalid-feedback">Please provide a valid password. Password must have at least 8 characters including: at least 1 uppercase character, 1 lowercase character and numeric characters.</div>
								</div>
								<div class="form-group">
									<input minlength="8" class="form-control" id="password2" type="password" name="password_2" placeholder="Password confirmation" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8"  required>
									<div class="invalid-feedback">Your given passwords do not match. Please provide a valid password.</div>
								</div>
								<div class="row justify-content-between mx-0">
									<a href="login.php" class="mdgas-login btn btn-mdgas button">Login</a>
									<a href="#reg-slide-2" class="mdgas-register btn btn-mdgas button disabled">Register</a>
								</div>
							</div>
						</div>
						<div id="reg-slide-2">
							<div class="reg-bg">
								<h4 class="text-white my-3 text-center">Personal data</h4>
								<div class="form-row mb-3">
									<div class="col-md-3 form-group">
										<select name="title" class="form-control" required>
										  <option value="">Title</option>
										  <option value="Mr">Mr</option>
										  <option value="Ms">Ms</option>
										  <option value="Mrs">Mrs</option>
										  <option value="Miss">Miss</option>
										  <option value="Dr">Dr</option>
										  <option value="Prof">Prof</option>
										</select>
										<div class="invalid-feedback">Please select your title.</div>
									</div>
									<div class="col form-group">
										<input type="text" class="form-control" name="firstname" value="" placeholder="First Name" required>
										<div class="invalid-feedback">Please provide your first name.</div>
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="lastname" value="" placeholder="Last Name" required>
									<div class="invalid-feedback">Please provide your last name.</div>
								</div>
								<div class="form-group">
									<select name="gender" class="form-control" required>
									  <option value="" disabled selected="selected">Gender</option>
									  <option value="male">Male</option>
									  <option value="female">Female</option>
									  <option value="Other">Other</option>
									</select>
									<div class="invalid-feedback">Please select your gender.</div>
								</div>
								<h4 class="text-white my-3 text-center">Professional data</h4>
								<div class="form-group">
									<select name="level" class="form-control" required>
									  <option value="" disabled selected="selected">Highest achieved academic level</option>
									  <option value="professor">Professor (e.g. Univ-Prof, Assoc. Prof.)</option>
									  <option value="phd">PhD or equivalent (e.g. Dr.)</option>
									  <option value="msc">Master or equivalent (e.g. MSc, Diploma)</option>
									  <option value="bsc">Bachelor or equivalent (e.g. BSc, Prediploma)</option>
									  <option value="uniqual">University qualification (e.g. High School)</option>
									</select>
									<div class="invalid-feedback">Please select your highest achieved academic level.</div>
								</div>
								<div class="form-group">
									<label for="datediploma" style="margin:0">Year you obtained your PhD (if applicable)</label>
									<input type="number" min="1900" max="<?php echo date("Y"); ?>" step="1" class="form-control date-picker" name="datediploma" value="" id="datediploma" data-validation="required" required>
									<div class="invalid-feedback">Please select the year you received your PhD title.</div>
								</div>
								<div class="form-group">
									<select name="erc1" class="form-control" required>
									  <option value="" disabled selected="selected">ERC keyword classification of research - (1st priority)</option>
										<option value="" disabled>Fundamental Constituents of Matter</option>
										<option value=" Fundamental interactions and fields"> Fundamental interactions and fields</option>
										<option value=" Particle physics"> Particle physics</option>
										<option value=" Nuclear physics"> Nuclear physics</option>
										<option value=" Nuclear astrophysics"> Nuclear astrophysics</option>
										<option value=" Gas and plasma physics"> Gas and plasma physics</option>
										<option value=" Electromagnetism"> Electromagnetism</option>
										<option value=" Atomic, molecular physics"> Atomic, molecular physics</option>
										<option value=" Ultra-cold atoms and molecules"> Ultra-cold atoms and molecules</option>
										<option value=" Optics, non-linear optics and nano-optics"> Optics, non-linear optics and nano-optics</option>
										<option value=" Quantum optics and quantum information"> Quantum optics and quantum information</option>
										<option value=" Lasers, ultra-short lasers and laser physics"> Lasers, ultra-short lasers and laser physics</option>
										<option value=" Relativity"> Relativity</option>
										<option value=" Thermodynamics"> Thermodynamics</option>
										<option value=" Non-linear physics"> Non-linear physics</option>
										<option value=" Metrology and measurement"> Metrology and measurement</option>
										<option value=" Statistical physics (gases)"> Statistical physics (gases)</option>
										<option value="" disabled>Condensed Matter Physics</option>
										<option value=" Structure of solids, material growth and characterisation"> Structure of solids, material growth and characterisation</option>
										<option value=" Mechanical and acoustical properties of condensed matter, Lattice dynamics"> Mechanical and acoustical properties of condensed matter, Lattice dynamics</option>
										<option value=" Transport properties of condensed matter"> Transport properties of condensed matter</option>
										<option value=" Electronic properties of materials, surfaces, interfaces, nanostructures, etc."> Electronic properties of materials, surfaces, interfaces, nanostructures, etc.</option>
										<option value=" Physical properties of semiconductors and insulators"> Physical properties of semiconductors and insulators</option>
										<option value=" Macroscopic quantum phenomena: superconductivity, superfluidity, etc."> Macroscopic quantum phenomena: superconductivity, superfluidity, etc.</option>
										<option value=" Spintronics"> Spintronics</option>
										<option value=" Magnetism and strongly correlated systems"> Magnetism and strongly correlated systems</option>
										<option value=" Condensed matter – beam interactions (photons, electrons, etc.)"> Condensed matter – beam interactions (photons, electrons, etc.)</option>
										<option value=" Nanophysics: nanoelectronics, nanophotonics, nanomagnetism, nanoelectromechanics, etc."> Nanophysics: nanoelectronics, nanophotonics, nanomagnetism, nanoelectromechanics, etc.</option>
										<option value=" Mesoscopic physics"> Mesoscopic physics</option>
										<option value=" Molecular electronics"> Molecular electronics</option>
										<option value=" Structure and dynamics of disordered systems: soft matter (gels, colloids, liquid crystals, etc.), liquids, glasses, defects, etc."> Structure and dynamics of disordered systems: soft matter (gels, colloids, liquid crystals, etc.), liquids, glasses, defects, etc.</option>
										<option value=" Fluid dynamics (physics)"> Fluid dynamics (physics)</option>
										<option value=" Statistical physics: phase transitions, noise and fluctuations, models of complex systems, etc."> Statistical physics: phase transitions, noise and fluctuations, models of complex systems, etc.</option>
										<option value=" Physics of biological systems"> Physics of biological systems</option>
										<option value="" disabled>Physical and Analytical Chemical Sciences</option>
										<option value=" Physical chemistry"> Physical chemistry</option>
										<option value=" Spectroscopic and spectrometric techniques"> Spectroscopic and spectrometric techniques</option>
										<option value=" Molecular architecture and Structure"> Molecular architecture and Structure</option>
										<option value=" Surface science and nanostructures"> Surface science and nanostructures</option>
										<option value=" Analytical chemistry"> Analytical chemistry</option>
										<option value=" Chemical physics"> Chemical physics</option>
										<option value=" Chemical instrumentation"> Chemical instrumentation</option>
										<option value=" Electrochemistry, electrodialysis, microfluidics, sensors"> Electrochemistry, electrodialysis, microfluidics, sensors</option>
										<option value=" Method development in chemistry"> Method development in chemistry</option>
										<option value=" Heterogeneous catalysis"> Heterogeneous catalysis</option>
										<option value=" Physical chemistry of biological systems"> Physical chemistry of biological systems</option>
										<option value=" Chemical reactions: mechanisms, dynamics, kinetics and catalytic reactions"> Chemical reactions: mechanisms, dynamics, kinetics and catalytic reactions</option>
										<option value=" Theoretical and computational chemistry"> Theoretical and computational chemistry</option>
										<option value=" Radiation and Nuclear chemistry"> Radiation and Nuclear chemistry</option>
										<option value=" Photochemistry"> Photochemistry</option>
										<option value=" Corrosion"> Corrosion</option>
										<option value=" Characterisation methods of materials"> Characterisation methods of materials</option>
										<option value=" Environment chemistry"> Environment chemistry</option>
										<option value="" disabled>Universe Sciences</option>
										<option value=" Solar and interplanetary physics"> Solar and interplanetary physics</option>
										<option value=" Planetary systems sciences"> Planetary systems sciences</option>
										<option value=" Interstellar medium"> Interstellar medium</option>
										<option value=" Formation of stars and planets"> Formation of stars and planets</option>
										<option value=" Astrobiology"> Astrobiology</option>
										<option value=" Stars and stellar systems"> Stars and stellar systems</option>
										<option value=" The Galaxy"> The Galaxy</option>
										<option value=" Formation and evolution of galaxies"> Formation and evolution of galaxies</option>
										<option value=" Clusters of galaxies and large scale structures"> Clusters of galaxies and large scale structures</option>
										<option value=" High energy and particles astronomy – X-rays, cosmic rays, gamma rays, neutrinos"> High energy and particles astronomy – X-rays, cosmic rays, gamma rays, neutrinos</option>
										<option value=" Relativistic astrophysics"> Relativistic astrophysics</option>
										<option value=" Dark matter, dark energy"> Dark matter, dark energy</option>
										<option value=" Gravitational astronomy"> Gravitational astronomy</option>
										<option value=" Cosmology"> Cosmology</option>
										<option value=" Space Sciences"> Space Sciences</option>
										<option value=" Very large data bases: archiving, handling and analysis"> Very large data bases: archiving, handling and analysis</option>
										<option value=" Instrumentation - telescopes, detectors and techniques"> Instrumentation - telescopes, detectors and techniques</option>
										<option value="" disabled>Earth System Science</option>
										<option value=" Atmospheric chemistry, atmospheric composition, air pollution"> Atmospheric chemistry, atmospheric composition, air pollution</option>
										<option value=" Meteorology, atmospheric physics and dynamics"> Meteorology, atmospheric physics and dynamics</option>
										<option value=" Climatology and climate change"> Climatology and climate change</option>
										<option value=" Terrestrial ecology, land cover change"> Terrestrial ecology, land cover change</option>
										<option value=" Geology, tectonics, volcanology"> Geology, tectonics, volcanology</option>
										<option value=" Palaeoclimatology, palaeoecology"> Palaeoclimatology, palaeoecology</option>
										<option value=" Physics of earth’s interior, seismology, volcanology"> Physics of earth’s interior, seismology, volcanology</option>
										<option value=" Oceanography (physical, chemical, biological, geological)"> Oceanography (physical, chemical, biological, geological)</option>
										<option value=" Biogeochemistry, biogeochemical cycles, environmental chemistry"> Biogeochemistry, biogeochemical cycles, environmental chemistry</option>
										<option value=" Mineralogy, petrology, igneous petrology, metamorphic petrology"> Mineralogy, petrology, igneous petrology, metamorphic petrology</option>
										<option value=" Geochemistry, crystal chemistry, isotope geochemistry, thermodynamics"> Geochemistry, crystal chemistry, isotope geochemistry, thermodynamics</option>
										<option value=" Sedimentology, soil science, palaeontology, earth evolution"> Sedimentology, soil science, palaeontology, earth evolution</option>
										<option value=" Physical geography"> Physical geography</option>
										<option value=" Earth observations from space/remote sensing"> Earth observations from space/remote sensing</option>
										<option value=" Geomagnetism, palaeomagnetism"> Geomagnetism, palaeomagnetism</option>
										<option value=" Ozone, upper atmosphere, ionosphere"> Ozone, upper atmosphere, ionosphere</option>
										<option value=" Hydrology, water and soil pollution"> Hydrology, water and soil pollution</option>
										<option value=" Cryosphere, dynamics of snow and ice cover, sea ice, permafrosts and ice sheets"> Cryosphere, dynamics of snow and ice cover, sea ice, permafrosts and ice sheets</option>
									</select>
								</div>
								<div class="form-group">
									<select name="erc2" class="form-control" required>
										<option value="" disabled selected="selected">ERC keyword classification of research - (2nd priority)</option>
										<option value="" disabled>Fundamental Constituents of Matter</option>
										<option value=" Fundamental interactions and fields"> Fundamental interactions and fields</option>
										<option value=" Particle physics"> Particle physics</option>
										<option value=" Nuclear physics"> Nuclear physics</option>
										<option value=" Nuclear astrophysics"> Nuclear astrophysics</option>
										<option value=" Gas and plasma physics"> Gas and plasma physics</option>
										<option value=" Electromagnetism"> Electromagnetism</option>
										<option value=" Atomic, molecular physics"> Atomic, molecular physics</option>
										<option value=" Ultra-cold atoms and molecules"> Ultra-cold atoms and molecules</option>
										<option value=" Optics, non-linear optics and nano-optics"> Optics, non-linear optics and nano-optics</option>
										<option value=" Quantum optics and quantum information"> Quantum optics and quantum information</option>
										<option value=" Lasers, ultra-short lasers and laser physics"> Lasers, ultra-short lasers and laser physics</option>
										<option value=" Relativity"> Relativity</option>
										<option value=" Thermodynamics"> Thermodynamics</option>
										<option value=" Non-linear physics"> Non-linear physics</option>
										<option value=" Metrology and measurement"> Metrology and measurement</option>
										<option value=" Statistical physics (gases)"> Statistical physics (gases)</option>
										<option value="" disabled>Condensed Matter Physics</option>
										<option value=" Structure of solids, material growth and characterisation"> Structure of solids, material growth and characterisation</option>
										<option value=" Mechanical and acoustical properties of condensed matter, Lattice dynamics"> Mechanical and acoustical properties of condensed matter, Lattice dynamics</option>
										<option value=" Transport properties of condensed matter"> Transport properties of condensed matter</option>
										<option value=" Electronic properties of materials, surfaces, interfaces, nanostructures, etc."> Electronic properties of materials, surfaces, interfaces, nanostructures, etc.</option>
										<option value=" Physical properties of semiconductors and insulators"> Physical properties of semiconductors and insulators</option>
										<option value=" Macroscopic quantum phenomena: superconductivity, superfluidity, etc."> Macroscopic quantum phenomena: superconductivity, superfluidity, etc.</option>
										<option value=" Spintronics"> Spintronics</option>
										<option value=" Magnetism and strongly correlated systems"> Magnetism and strongly correlated systems</option>
										<option value=" Condensed matter – beam interactions (photons, electrons, etc.)"> Condensed matter – beam interactions (photons, electrons, etc.)</option>
										<option value=" Nanophysics: nanoelectronics, nanophotonics, nanomagnetism, nanoelectromechanics, etc."> Nanophysics: nanoelectronics, nanophotonics, nanomagnetism, nanoelectromechanics, etc.</option>
										<option value=" Mesoscopic physics"> Mesoscopic physics</option>
										<option value=" Molecular electronics"> Molecular electronics</option>
										<option value=" Structure and dynamics of disordered systems: soft matter (gels, colloids, liquid crystals, etc.), liquids, glasses, defects, etc."> Structure and dynamics of disordered systems: soft matter (gels, colloids, liquid crystals, etc.), liquids, glasses, defects, etc.</option>
										<option value=" Fluid dynamics (physics)"> Fluid dynamics (physics)</option>
										<option value=" Statistical physics: phase transitions, noise and fluctuations, models of complex systems, etc."> Statistical physics: phase transitions, noise and fluctuations, models of complex systems, etc.</option>
										<option value=" Physics of biological systems"> Physics of biological systems</option>
										<option value="" disabled>Physical and Analytical Chemical Sciences</option>
										<option value=" Physical chemistry"> Physical chemistry</option>
										<option value=" Spectroscopic and spectrometric techniques"> Spectroscopic and spectrometric techniques</option>
										<option value=" Molecular architecture and Structure"> Molecular architecture and Structure</option>
										<option value=" Surface science and nanostructures"> Surface science and nanostructures</option>
										<option value=" Analytical chemistry"> Analytical chemistry</option>
										<option value=" Chemical physics"> Chemical physics</option>
										<option value=" Chemical instrumentation"> Chemical instrumentation</option>
										<option value=" Electrochemistry, electrodialysis, microfluidics, sensors"> Electrochemistry, electrodialysis, microfluidics, sensors</option>
										<option value=" Method development in chemistry"> Method development in chemistry</option>
										<option value=" Heterogeneous catalysis"> Heterogeneous catalysis</option>
										<option value=" Physical chemistry of biological systems"> Physical chemistry of biological systems</option>
										<option value=" Chemical reactions: mechanisms, dynamics, kinetics and catalytic reactions"> Chemical reactions: mechanisms, dynamics, kinetics and catalytic reactions</option>
										<option value=" Theoretical and computational chemistry"> Theoretical and computational chemistry</option>
										<option value=" Radiation and Nuclear chemistry"> Radiation and Nuclear chemistry</option>
										<option value=" Photochemistry"> Photochemistry</option>
										<option value=" Corrosion"> Corrosion</option>
										<option value=" Characterisation methods of materials"> Characterisation methods of materials</option>
										<option value=" Environment chemistry"> Environment chemistry</option>
										<option value="" disabled>Universe Sciences</option>
										<option value=" Solar and interplanetary physics"> Solar and interplanetary physics</option>
										<option value=" Planetary systems sciences"> Planetary systems sciences</option>
										<option value=" Interstellar medium"> Interstellar medium</option>
										<option value=" Formation of stars and planets"> Formation of stars and planets</option>
										<option value=" Astrobiology"> Astrobiology</option>
										<option value=" Stars and stellar systems"> Stars and stellar systems</option>
										<option value=" The Galaxy"> The Galaxy</option>
										<option value=" Formation and evolution of galaxies"> Formation and evolution of galaxies</option>
										<option value=" Clusters of galaxies and large scale structures"> Clusters of galaxies and large scale structures</option>
										<option value=" High energy and particles astronomy – X-rays, cosmic rays, gamma rays, neutrinos"> High energy and particles astronomy – X-rays, cosmic rays, gamma rays, neutrinos</option>
										<option value=" Relativistic astrophysics"> Relativistic astrophysics</option>
										<option value=" Dark matter, dark energy"> Dark matter, dark energy</option>
										<option value=" Gravitational astronomy"> Gravitational astronomy</option>
										<option value=" Cosmology"> Cosmology</option>
										<option value=" Space Sciences"> Space Sciences</option>
										<option value=" Very large data bases: archiving, handling and analysis"> Very large data bases: archiving, handling and analysis</option>
										<option value=" Instrumentation - telescopes, detectors and techniques"> Instrumentation - telescopes, detectors and techniques</option>
										<option value="" disabled>Earth System Science</option>
										<option value=" Atmospheric chemistry, atmospheric composition, air pollution"> Atmospheric chemistry, atmospheric composition, air pollution</option>
										<option value=" Meteorology, atmospheric physics and dynamics"> Meteorology, atmospheric physics and dynamics</option>
										<option value=" Climatology and climate change"> Climatology and climate change</option>
										<option value=" Terrestrial ecology, land cover change"> Terrestrial ecology, land cover change</option>
										<option value=" Geology, tectonics, volcanology"> Geology, tectonics, volcanology</option>
										<option value=" Palaeoclimatology, palaeoecology"> Palaeoclimatology, palaeoecology</option>
										<option value=" Physics of earth’s interior, seismology, volcanology"> Physics of earth’s interior, seismology, volcanology</option>
										<option value=" Oceanography (physical, chemical, biological, geological)"> Oceanography (physical, chemical, biological, geological)</option>
										<option value=" Biogeochemistry, biogeochemical cycles, environmental chemistry"> Biogeochemistry, biogeochemical cycles, environmental chemistry</option>
										<option value=" Mineralogy, petrology, igneous petrology, metamorphic petrology"> Mineralogy, petrology, igneous petrology, metamorphic petrology</option>
										<option value=" Geochemistry, crystal chemistry, isotope geochemistry, thermodynamics"> Geochemistry, crystal chemistry, isotope geochemistry, thermodynamics</option>
										<option value=" Sedimentology, soil science, palaeontology, earth evolution"> Sedimentology, soil science, palaeontology, earth evolution</option>
										<option value=" Physical geography"> Physical geography</option>
										<option value=" Earth observations from space/remote sensing"> Earth observations from space/remote sensing</option>
										<option value=" Geomagnetism, palaeomagnetism"> Geomagnetism, palaeomagnetism</option>
										<option value=" Ozone, upper atmosphere, ionosphere"> Ozone, upper atmosphere, ionosphere</option>
										<option value=" Hydrology, water and soil pollution"> Hydrology, water and soil pollution</option>
										<option value=" Cryosphere, dynamics of snow and ice cover, sea ice, permafrosts and ice sheets"> Cryosphere, dynamics of snow and ice cover, sea ice, permafrosts and ice sheets</option>
									</select>
								</div>
								<div class="form-group">
									<select name="erc3" class="form-control" required>
									  <option value="" disabled selected="selected">ERC keyword classification of research - (3th priority)</option>
													<option value="" disabled>Fundamental Constituents of Matter</option>
										<option value=" Fundamental interactions and fields"> Fundamental interactions and fields</option>
										<option value=" Particle physics"> Particle physics</option>
										<option value=" Nuclear physics"> Nuclear physics</option>
										<option value=" Nuclear astrophysics"> Nuclear astrophysics</option>
										<option value=" Gas and plasma physics"> Gas and plasma physics</option>
										<option value=" Electromagnetism"> Electromagnetism</option>
										<option value=" Atomic, molecular physics"> Atomic, molecular physics</option>
										<option value=" Ultra-cold atoms and molecules"> Ultra-cold atoms and molecules</option>
										<option value=" Optics, non-linear optics and nano-optics"> Optics, non-linear optics and nano-optics</option>
										<option value=" Quantum optics and quantum information"> Quantum optics and quantum information</option>
										<option value=" Lasers, ultra-short lasers and laser physics"> Lasers, ultra-short lasers and laser physics</option>
										<option value=" Relativity"> Relativity</option>
										<option value=" Thermodynamics"> Thermodynamics</option>
										<option value=" Non-linear physics"> Non-linear physics</option>
										<option value=" Metrology and measurement"> Metrology and measurement</option>
										<option value=" Statistical physics (gases)"> Statistical physics (gases)</option>
										<option value="" disabled>Condensed Matter Physics</option>
										<option value=" Structure of solids, material growth and characterisation"> Structure of solids, material growth and characterisation</option>
										<option value=" Mechanical and acoustical properties of condensed matter, Lattice dynamics"> Mechanical and acoustical properties of condensed matter, Lattice dynamics</option>
										<option value=" Transport properties of condensed matter"> Transport properties of condensed matter</option>
										<option value=" Electronic properties of materials, surfaces, interfaces, nanostructures, etc."> Electronic properties of materials, surfaces, interfaces, nanostructures, etc.</option>
										<option value=" Physical properties of semiconductors and insulators"> Physical properties of semiconductors and insulators</option>
										<option value=" Macroscopic quantum phenomena: superconductivity, superfluidity, etc."> Macroscopic quantum phenomena: superconductivity, superfluidity, etc.</option>
										<option value=" Spintronics"> Spintronics</option>
										<option value=" Magnetism and strongly correlated systems"> Magnetism and strongly correlated systems</option>
										<option value=" Condensed matter – beam interactions (photons, electrons, etc.)"> Condensed matter – beam interactions (photons, electrons, etc.)</option>
										<option value=" Nanophysics: nanoelectronics, nanophotonics, nanomagnetism, nanoelectromechanics, etc."> Nanophysics: nanoelectronics, nanophotonics, nanomagnetism, nanoelectromechanics, etc.</option>
										<option value=" Mesoscopic physics"> Mesoscopic physics</option>
										<option value=" Molecular electronics"> Molecular electronics</option>
										<option value=" Structure and dynamics of disordered systems: soft matter (gels, colloids, liquid crystals, etc.), liquids, glasses, defects, etc."> Structure and dynamics of disordered systems: soft matter (gels, colloids, liquid crystals, etc.), liquids, glasses, defects, etc.</option>
										<option value=" Fluid dynamics (physics)"> Fluid dynamics (physics)</option>
										<option value=" Statistical physics: phase transitions, noise and fluctuations, models of complex systems, etc."> Statistical physics: phase transitions, noise and fluctuations, models of complex systems, etc.</option>
										<option value=" Physics of biological systems"> Physics of biological systems</option>
										<option value="" disabled>Physical and Analytical Chemical Sciences</option>
										<option value=" Physical chemistry"> Physical chemistry</option>
										<option value=" Spectroscopic and spectrometric techniques"> Spectroscopic and spectrometric techniques</option>
										<option value=" Molecular architecture and Structure"> Molecular architecture and Structure</option>
										<option value=" Surface science and nanostructures"> Surface science and nanostructures</option>
										<option value=" Analytical chemistry"> Analytical chemistry</option>
										<option value=" Chemical physics"> Chemical physics</option>
										<option value=" Chemical instrumentation"> Chemical instrumentation</option>
										<option value=" Electrochemistry, electrodialysis, microfluidics, sensors"> Electrochemistry, electrodialysis, microfluidics, sensors</option>
										<option value=" Method development in chemistry"> Method development in chemistry</option>
										<option value=" Heterogeneous catalysis"> Heterogeneous catalysis</option>
										<option value=" Physical chemistry of biological systems"> Physical chemistry of biological systems</option>
										<option value=" Chemical reactions: mechanisms, dynamics, kinetics and catalytic reactions"> Chemical reactions: mechanisms, dynamics, kinetics and catalytic reactions</option>
										<option value=" Theoretical and computational chemistry"> Theoretical and computational chemistry</option>
										<option value=" Radiation and Nuclear chemistry"> Radiation and Nuclear chemistry</option>
										<option value=" Photochemistry"> Photochemistry</option>
										<option value=" Corrosion"> Corrosion</option>
										<option value=" Characterisation methods of materials"> Characterisation methods of materials</option>
										<option value=" Environment chemistry"> Environment chemistry</option>
										<option value="" disabled>Universe Sciences</option>
										<option value=" Solar and interplanetary physics"> Solar and interplanetary physics</option>
										<option value=" Planetary systems sciences"> Planetary systems sciences</option>
										<option value=" Interstellar medium"> Interstellar medium</option>
										<option value=" Formation of stars and planets"> Formation of stars and planets</option>
										<option value=" Astrobiology"> Astrobiology</option>
										<option value=" Stars and stellar systems"> Stars and stellar systems</option>
										<option value=" The Galaxy"> The Galaxy</option>
										<option value=" Formation and evolution of galaxies"> Formation and evolution of galaxies</option>
										<option value=" Clusters of galaxies and large scale structures"> Clusters of galaxies and large scale structures</option>
										<option value=" High energy and particles astronomy – X-rays, cosmic rays, gamma rays, neutrinos"> High energy and particles astronomy – X-rays, cosmic rays, gamma rays, neutrinos</option>
										<option value=" Relativistic astrophysics"> Relativistic astrophysics</option>
										<option value=" Dark matter, dark energy"> Dark matter, dark energy</option>
										<option value=" Gravitational astronomy"> Gravitational astronomy</option>
										<option value=" Cosmology"> Cosmology</option>
										<option value=" Space Sciences"> Space Sciences</option>
										<option value=" Very large data bases: archiving, handling and analysis"> Very large data bases: archiving, handling and analysis</option>
										<option value=" Instrumentation - telescopes, detectors and techniques"> Instrumentation - telescopes, detectors and techniques</option>
										<option value="" disabled>Earth System Science</option>
										<option value=" Atmospheric chemistry, atmospheric composition, air pollution"> Atmospheric chemistry, atmospheric composition, air pollution</option>
										<option value=" Meteorology, atmospheric physics and dynamics"> Meteorology, atmospheric physics and dynamics</option>
										<option value=" Climatology and climate change"> Climatology and climate change</option>
										<option value=" Terrestrial ecology, land cover change"> Terrestrial ecology, land cover change</option>
										<option value=" Geology, tectonics, volcanology"> Geology, tectonics, volcanology</option>
										<option value=" Palaeoclimatology, palaeoecology"> Palaeoclimatology, palaeoecology</option>
										<option value=" Physics of earth’s interior, seismology, volcanology"> Physics of earth’s interior, seismology, volcanology</option>
										<option value=" Oceanography (physical, chemical, biological, geological)"> Oceanography (physical, chemical, biological, geological)</option>
										<option value=" Biogeochemistry, biogeochemical cycles, environmental chemistry"> Biogeochemistry, biogeochemical cycles, environmental chemistry</option>
										<option value=" Mineralogy, petrology, igneous petrology, metamorphic petrology"> Mineralogy, petrology, igneous petrology, metamorphic petrology</option>
										<option value=" Geochemistry, crystal chemistry, isotope geochemistry, thermodynamics"> Geochemistry, crystal chemistry, isotope geochemistry, thermodynamics</option>
										<option value=" Sedimentology, soil science, palaeontology, earth evolution"> Sedimentology, soil science, palaeontology, earth evolution</option>
										<option value=" Physical geography"> Physical geography</option>
										<option value=" Earth observations from space/remote sensing"> Earth observations from space/remote sensing</option>
										<option value=" Geomagnetism, palaeomagnetism"> Geomagnetism, palaeomagnetism</option>
										<option value=" Ozone, upper atmosphere, ionosphere"> Ozone, upper atmosphere, ionosphere</option>
										<option value=" Hydrology, water and soil pollution"> Hydrology, water and soil pollution</option>
										<option value=" Cryosphere, dynamics of snow and ice cover, sea ice, permafrosts and ice sheets"> Cryosphere, dynamics of snow and ice cover, sea ice, permafrosts and ice sheets</option>
									</select>
								</div>
								<h4 class="text-white my-3 text-center">Affiliation</h4>
								<div class="form-group">
									<select name="countryaffilation" class="form-control" required>
									  <option value="" disabled selected="selected">Country of employment or affiliation</option>
									  <option value="COST Countries">COST Countries</option>
									  <option value="Non-COST Country">Non-COST Country</option>
									  <option value="European agency or organization">European agency or organization</option>
									  <option value="Other">Other</option>
									</select>
									<div class="invalid-feedback">Please select country of your employment or affiliation.</div>
								</div>
								<div class="form-group">
									<select name="intstitutionaffilation" class="form-control" required>
									  <option value="" disabled selected="selected">Type of Institution</option>
									  <option value="Academic Institution">Academic Institution</option>
									  <option value="Non-academic organization">Non-academic organization</option>
									  <option value="Industry">Industry</option>
									  <option value="Other">Other</option>
									</select>
									<div class="invalid-feedback">Please select the type of institution you are employed by/affiliated with.</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="nameofinstitution" value=""  placeholder="Name of Institution" required>
									<div class="invalid-feedback">Please provide the name of your institution.</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="departament" value=""  placeholder="Department">
									<div class="invalid-feedback">Please provide the name of your department.</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="city" value=""  placeholder="City" required>
									<div class="invalid-feedback">Please provide your city.</div>
								</div>
								<div class="form-group">
									<select name="country" class="form-control" required>
										<option value="">Country</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Åland Islands">Åland Islands</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antarctica">Antarctica</option>
										<option value="Antigua and Barbuda">Antigua and Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Bouvet Island">Bouvet Island</option>
										<option value="Brazil">Brazil</option>
										<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
										<option value="Brunei Darussalam">Brunei Darussalam</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African Republic</option>
										<option value="Chad">Chad</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cote D'ivoire">Cote D'ivoire</option>
										<option value="Croatia">Croatia</option>
										<option value="Cuba">Cuba</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="French Southern Territories">French Southern Territories</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guadeloupe">Guadeloupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guernsey">Guernsey</option>
										<option value="Guinea">Guinea</option>
										<option value="Guinea-bissau">Guinea-bissau</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
										<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Indonesia">Indonesia</option>
										<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Isle of Man">Isle of Man</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jersey">Jersey</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
										<option value="Korea, Republic of">Korea, Republic of</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macao">Macao</option>
										<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malawi">Malawi</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Martinique">Martinique</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
										<option value="Moldova, Republic of">Moldova, Republic of</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montenegro">Montenegro</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Myanmar">Myanmar</option>
										<option value="Namibia">Namibia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherlands">Netherlands</option>
										<option value="Netherlands Antilles">Netherlands Antilles</option>
										<option value="New Caledonia">New Caledonia</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Niue">Niue</option>
										<option value="Norfolk Island">Norfolk Island</option>
										<option value="Northern Mariana Islands">Northern Mariana Islands</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau">Palau</option>
										<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
										<option value="Panama">Panama</option>
										<option value="Papua New Guinea">Papua New Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Philippines">Philippines</option>
										<option value="Pitcairn">Pitcairn</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Reunion">Reunion</option>
										<option value="Romania">Romania</option>
										<option value="Russian Federation">Russian Federation</option>
										<option value="Rwanda">Rwanda</option>
										<option value="Saint Helena">Saint Helena</option>
										<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
										<option value="Saint Lucia">Saint Lucia</option>
										<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
										<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
										<option value="Samoa">Samoa</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome and Principe">Sao Tome and Principe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Serbia">Serbia</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syrian Arab Republic">Syrian Arab Republic</option>
										<option value="Taiwan, Province of China">Taiwan, Province of China</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
										<option value="Thailand">Thailand</option>
										<option value="Timor-leste">Timor-leste</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad and Tobago">Trinidad and Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Emirates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States">United States</option>
										<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
										<option value="Uruguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Viet Nam">Viet Nam</option>
										<option value="Virgin Islands, British">Virgin Islands, British</option>
										<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
										<option value="Wallis and Futuna">Wallis and Futuna</option>
										<option value="Western Sahara">Western Sahara</option>
										<option value="Yemen">Yemen</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select>
									<div class="invalid-feedback">Please select a country.</div>
								</div>
								<div class="form-group my-3">
									<input type="text" class="form-control" name="orcid" value=""  placeholder="Your ORCID number" required>
									<div class="orcid-desc"><a href="https://orcid.org/">How to generate your ORCID?</a></div>
									<div class="invalid-feedback">Please provide your ORCID number.</div>
								</div>
								<h4 class="text-white my-3 text-center">Working groups</h4>
								<h6 class="text-white my-3 text-center">(Please choose at least one working group)</h6>
								<div class="form-group reg-wgs">
									<div class="form-check my-3">
										<input name="wg1" class="form-check-input" type="checkbox" value="1" required>
										<label for="wg1" class="form-check-label ml-3" style="font-size: 12px;"><b>Working group #1:</b> New high-performance instrumentation and experimental methods</label>
									</div>
									<div class="form-check my-3">
										<input name="wg2" class="form-check-input" type="checkbox" value="1" required>
										<label for="wg2" class="form-check-label ml-3" style="font-size: 12px;"><b>Working group #2:</b> Survival and destruction of molecules following energetic processing</label>
									</div>
									<div class="form-check my-3">
										<input name="wg3" class="form-check-input" type="checkbox" value="1" required>
										<label for="wg3" class="form-check-label ml-3" style="font-size: 12px;"><b>Working group #3:</b> Charge-, energy flow, and molecular growth in intermolecular and intracluster reactions</label>
									</div>
								</div>
								<h4 class="text-white my-3 text-center">Other</h4>
								<div class="custom-file mb-3">
									<h6 class="custom-file-label">Your photo</h6>
									<input type="file" class="custom-file-input" name="photo" placeholder="Your photo" id="fileinput" />
								</div>
								<div class="form-group my-3">
									<input type="text" class="form-control" name="website" value=""  placeholder="Your website">
								</div>
								<div class="custom-control custom-checkbox my-3">
									<input name="confirm1" class="form-check-input" type="checkbox" value="1" required>
									<label for="confirm1" class="form-check-label ml-3" style="font-size: 12px;">I agree to the <a href="https://www.cost.eu/wp-content/uploads/2018/09/Data-protection-FAQ-for-COST-Actions.pdf">Personal Data Protection Information Clause</a>.<span style="color:#e68891;font-size:16px" title="You have the right to withdraw your consent at any time by sending an e-mail to management@mdgas.eu. Withdrawing your consent means that the personal data collected here will no longer be used. However, any prior use of your data remains valid.">*</span></label>
								    <div class="invalid-feedback">You must agree before submitting.</div>
								</div>
								<div class="custom-control custom-checkbox my-3">
									<input name="confirm2" class="form-check-input" type="checkbox" value="1" required>
									<label for="confirm2" class="form-check-label ml-3" style="font-size: 12px;">I agree to publish the pictures/videos where I appear taken or made during a meeting/an event related to the MD-GAS COST Action CA18212 on the MD-GAS Action <a href="mdgas.eu">mdgas.eu</a> website and other communications tools.<span style="color:#e68891;font-size:16px" title="You have the right to withdraw your consent at any time by sending an e-mail to management@mdgas.eu. Withdrawing your consent means that the personal data collected here will no longer be used. However, any prior use of your data remains valid.">*</span></label>
								    <div class="invalid-feedback">You must agree before submitting.</div>
								</div>
								<div class="custom-control custom-checkbox my-3">
									<input name="confirm3" class="form-check-input" type="checkbox" value="1" required>
									<label for="confirm3" class="form-check-label ml-3" style="font-size: 12px;">I agree to publish my contact details on the COST MD-GAS Action CA18212 <a href="mdgas.eu">mdgas.eu</a> website and other communications tools or publications for communication purposes.</label>
								    <div class="invalid-feedback">You must agree before submitting.</div>
								</div>
								<div class="custom-control custom-checkbox my-3">
									<input name="confirm4" class="form-check-input" type="checkbox" value="1">
									<label for="confirm4" class="form-check-label ml-3" style="font-size: 12px;">I agree to receive a Newsletter from MD-GAS COST CA18212 Action <a href="mdgas.eu">mdgas.eu</a>.</label>
								</div>
								<div class="text-white" style="font-size: 12px;"><span style="color:#e68891;font-size:16px">*</span> You have the right to withdraw your consent at any time by sending an e-mail to <a href="mailto:management@mdgas.eu">management@mdgas.eu</a>. Withdrawing your consent means that the personal data collected here will no longer be used. However, any prior use of your data remains valid.</div>
								<div class="row justify-content-between mx-0 my-3">
									<a href="#reg-slide-1" class="btn btn-mdgas button" style="float:left">Back</a>
									<button type="submit" class="btn btn-mdgas button" name="reg_user">Register</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

	</section>
	</main>
	<?php require_once('includes/footer.php'); ?>
