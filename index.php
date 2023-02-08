<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>VAXpress</title>
    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <!--HEADER-->
    <header>
      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-white">VAX</span>press</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#faqs">FAQS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="./VRMS-ADMIN/index.php">LOGIN VIA ADMIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="./VRMS-CLIENT/index.php">LOGIN VIA CLIENT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>  
      <!-- BACKGROUND IMAGE -->
    <div id="intro-example" class="p-5 text-center bg-image" >
      <div class="d-flex justify-content-center align-items-center h-100" style="background-color: rgba(255, 255, 255, 0.288);">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white p-5">
            <h1 class="mb-3"><span class="text-danger">VAX</span>press</h1>
            <h4 class="mb-3"><i>"Stay protected, stay organized with VAXpress"</i></h4>
            <h5 class="mb-4">VAXpress is a system used to track and manage vaccination records for individuals. 
                    The purpose of such system is to provide a centralized and secure location for storing vaccination records, making it easy for individuals and healthcare providers to access and update this information as needed.</h5>
          </div>
        </div>
      </div>
    </div>   
    </header>
    

    <!--ABOUT-->
    <section class="about section-padding" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
              <img alt="" class="img-fluid" src="./files/imgs/covid.jpg" />
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="about-text">
              <h2>
                Get to know VAXPRESS!
              </h2>
              <p>
                We selected the "Vaccination Record Management System" to
                effectively track and manage vaccination records during the
                pandemic. Immunization cards are important health documents that
                provide proof of vaccination through information on dates and
                dosage. The system allows for digital access to these records
                and can assist in preventing loss of physical vaccination cards.
                Additionally, it enables us to utilize technology to easily
                access and view our vaccination history.
              </p>
              <a class="btn btn-outline-danger btn-lg m-2" href="#">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--OUR TEAM-->
    <section class="team section-padding" id="team">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h2>Meet the Developers</h2>
              <p>
                Student of Bachelor Science in Information Technology <br />
                from Technological University of the Philippines - Manila
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img
                  alt=""
                  class="img-fluid rounded-circle"
                  src="./files/imgs/carlota.jpg"
                />
                <h3 class="card-title py-2">Carlota<br />Corvera</h3>
                <p class="card-text">
                  A 20-year-old student from Caloocan City who pursuing UX/UI
                  Designing.
                </p>
                <p class="socials">
                  <a href="https://www.facebook.com/xarlota.corvera98"
                    ><i class="bi bi-facebook text-dark mx-1"></i
                  ></a>
                  <a
                    href="https://www.linkedin.com/in/carlota-corvera-824197207"
                    ><i class="bi bi-linkedin text-dark mx-1"></i
                  ></a>
                  <a href="https://github.com/cloudxs00"
                    ><i class="bi bi-github text-dark mx-1"></i
                  ></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img
                  alt=""
                  class="img-fluid rounded-circle"
                  src="./files/imgs/mike.jpg"
                />
                <h3 class="card-title py-2">Mike Jayson Rowelo</h3>
                <p class="card-text">
                  A 21-year-old student from Navotas City who pursuing Web
                  Designing.
                </p>
                <p class="socials">
                  <a href="https://www.facebook.com/jaysonpanget12"
                    ><i class="bi bi-facebook text-dark mx-1"></i
                  ></a>
                  <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="https://github.com/jaysonruelo"
                    ><i class="bi bi-github text-dark mx-1"></i
                  ></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img
                  alt=""
                  class="img-fluid rounded-circle"
                  src="./files/imgs/russell.png"
                />
                <h3 class="card-title py-2">Russell<br />Obsequio</h3>
                <p class="card-text">
                  A 21-year-old student from Quezon City who pursuing Web
                  Developing.
                </p>
                <p class="socials">
                  <a href="https://www.facebook.com/russell.obsequio.3"
                    ><i class="bi bi-facebook text-dark mx-1"></i
                  ></a>
                  <a href="https://www.linkedin.com/in/russell-obsequio/"
                    ><i class="bi bi-linkedin text-dark mx-1"></i
                  ></a>
                  <a href="https://github.com/rgrgogu"
                    ><i class="bi bi-github text-dark mx-1"></i
                  ></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img
                  alt=""
                  class="img-fluid rounded-circle"
                  src="./files/imgs/mark.jpg"
                />
                <h3 class="card-title py-2">Markjohnzell<br />Unabia</h3>
                <p class="card-text">
                  A 21-year-old student from Cabuyao, Laguna who pursuing IT Practitioner.
                </p>
                <p class="socials">
                  <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href=""><i class="bi bi-github text-dark mx-1"></i></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--FAQS-->
    <section class="faqs section-padding" id="faqs">
      <div class="container">
        <h1 class="text-center text-uppercase mb-5">
          Frequently Asked Questions
        </h1>
        <br />
        <br />
        <div class="row flex-center">
          <div class="col-sm-10 offset-sm-1">
            <div class="accordion" id="accordionExample">
              <!--first faqs-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    <div class="circle-icon">
                      <i class="fa fa-question"></i>
                    </div>
                    <span>How can I protect myself from COVID-19?</span>
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <ul>
                      <li>Wear face mask and face shield</li>
                      <li>Sanitize your hands</li>
                      <li>
                        Practice one-meter physical distancing and limit
                        physical interaction
                      </li>
                      <li>Ensure good indoor ventilation and air flow</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--second faqs-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    <div class="circle-icon">
                      <i class="fa fa-question"></i>
                    </div>
                    <span>What should I do if I am a close contant?</span>
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Get tested if you are a close contact. Tell your Barangay
                    Health Emergency Response Team (BHERT) that you are a close
                    contact. This is to inform your next steps:
                    <br /><br /><strong>COVID-19 Testing</strong> Referral to
                    the Temporary Treatment and Monitoring Facility (TTMF) or
                    hospital (if needed)
                  </div>
                </div>
              </div>
              <!--third faqs-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    <div class="circle-icon">
                      <i class="fa fa-question"></i>
                    </div>
                    <span>How does COVID-19 spread?</span>
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    COVID-19 is transmitted from person to person via droplets,
                    contact, and fomites. It is transmitted when one individual
                    talks, sneezes, or coughs producing ‘droplets’ of saliva
                    containing the COVID-19 virus. These droplets are then
                    inhaled by another person. COVID-19 transmission usually
                    occurs among close contacts -- including family members and
                    healthcare workers. It is therefore important to maintain a
                    distance of more than 1 meter away from any person who has
                    respiratory symptoms.
                  </div>
                </div>
              </div>
              <!--fourth faqs-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFour"
                    aria-expanded="false"
                    aria-controls="collapseFour"
                  >
                    <div class="circle-icon">
                      <i class="fa fa-question"></i>
                    </div>
                    <span>What are the signs and symptoms of COVID-19?</span>
                  </button>
                </h2>
                <div
                  id="collapseFour"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    According to WHO, the most common symptoms of COVID-19 are
                    fever, tiredness and dry cough. Few patients experience
                    aches and pains, nasal congestion, runny nose, sore throat
                    or diarrhea. Patients usually have mild symptoms that start
                    gradually. Most patients recover without needing any special
                    treatment. Only around 1 of 6 patients manifest with
                    difficulty breathing and become seriously ill.
                  </div>
                </div>
              </div>
              <!--fitfth faqs-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFive"
                    aria-expanded="false"
                    aria-controls="collapseFive"
                  >
                    <div class="circle-icon">
                      <i class="fa fa-question"></i>
                    </div>
                    <span>
                      Where can the public get information about COVID-19?</span
                    >
                  </button>
                </h2>
                <div
                  id="collapseFive"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFive"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    The public can get information about the 2019-nCoV from the
                    DOH’s official press releases, website, and official social
                    media platforms. Please be wary of fake news and reports
                    circulating online, and always verify the sources of your
                    information.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--FOOTER-->
    <footer class="bg-danger p-2 d-flex d-flex justify-content-center align-items-center">
      <div class="container d-flex d-flex justify-content-center align-items-center mt-3">
        <p class="text-white">All Right Reserved By VAXpress 2023</p>
      </div>
    </footer>

    <!-- All Js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
