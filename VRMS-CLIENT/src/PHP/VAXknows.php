<?php
    include('./Sidebar.php');
?>
<section>
    <div class="col pt-4 pe-3" id="myProfile">
        <div class="pb-3">
            <h1>KNOW YOUR VACCINE</h1>
            <hr/>
            <h3>Information you need to know about the COVID-19 vaccines on our current portfolio:</h3> 
            <ul>
              <li>Technology Platform</li>
              <li>Issuance of Emergency Use Authorization (EUA) by the Philippine Food and Drug Administration (FDA)</li>
              <li>How many doses and interval in which each dose is taken</li>
              <li>Storage and cold chain requirements</li>
              <li>How well it will do in preventing symptomatic and severe COVID-19</li>
              <li>Common side effects you can expect following the latest Phase III clinical trials datax</li>
            </ul>
        </div>
        <div class="row align-items-center">
            <div class="col-4">
                <p>
                    <button class="btn btn-danger w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"><i class="bx bx-shield-quarter collapse_icon"></i><br>Pfizer BioNTech</button>
                </p>
                <div class="collapse" id="collapseExample1" style="width: 100%;">
                    <div class="card card-body" style="height: 370px">
                        <ul class="text-justify">
                            <li>mRNA</li>
                            <li>January 14, 2021</li>
                            <li>12 y/o and Above</li>
                            <li>2 doses, 21 days apart</li>
                            <li>-80°C to -60°C</li>
                            <li>95% agaisnt symptomatic COVID-19 (CT done for 16 y/o and above) 100% agaisnt symptomatic COVID-19 (CT done for 12 to 15y/o)[A][B]</li>
                            <li>short-term, mild-to-moderate pain at injection site fatigue, headache[B]</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p>
                    <button class="btn btn-danger w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"><i class="bx bx-shield-quarter collapse_icon"></i><br>Oxford AstraZeneca</button>
                </p>
                <div class="collapse" id="collapseExample2" style="width: 100%;">
                    <div class="card card-body"  style="height: 370px">
                      <ul class="text-justify">
                        <li>Viral Vector(non-replicating)</li>
                        <li>January 28, 2021</li>
                        <li>18 y/o and Above</li>
                        <li>2 doses, 4-12 weeks apart[A]</li>
                        <li>2°C to 8°C[A]</li>
                        <li>70.4% agaisnt symptomatic COVID-19 (CT done for 16 y/o and above)[A][B] 100% agaisnt servere COVID-19</li>
                        <li>injection site pain and tenderness fatigue, headache, feverishness, myalgia[B]</li>
                      </ul>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p>
                    <button class="btn btn-danger w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3"><i class="bx bx-shield-quarter collapse_icon"></i><br>Sinovac CoronaVac</button>
                </p>
                <div class="collapse" id="collapseExample3" style="width: 100%;">
                    <div class="card card-body" style="height: 370px">
                        <ul class="text-justify">
                            <li>Inactivated Virus</li>
                            <li>Febuary 22, 2021</li>
                            <li>18 y/o and Above</li>
                            <li>2 doses, 28 days apart[A]</li>
                            <li>2°C and 8°C[A]</li>
                            <li>51% overall VE agaisnt symptomatic COVID-19 100% agaisnt servere COVID-19 and hospitalization[D]</li>
                            <li>local lymphadenopathy at the injection site allergic reqqaction that may be caused by any component of the vaccine convulsion(with or without fever)[I]</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3">
            <div class="col-4">
                <p>
                    <button class="btn btn-danger w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample1"><i class="bx bx-shield-quarter collapse_icon"></i><br>Gamaleya Sputnik V</button>
                </p>
                <div class="collapse" id="collapseExample4" style="width: 100%;">
                    <div class="card card-body" style="height: 370px">
                        <ul class="text-justify">
                            <li>Viral Vector (non-replicating)</li>
                            <li>March 19, 2021</li>
                            <li>18 y/o and Above</li>
                            <li>2 doses, 3 weeks apart[A]</li>
                            <li>18°C and below(frozen solution)[A]</li>
                            <li>91.6% agaisnt symptomatic COVID-19[B] 100% agaisnt servere COVID-19 and hospitalization[D]</li>
                            <li>lpain on injection site, hyperthermia, swelling headache, asthenia, muscle/joint pain, malasie, sore throat, diarrhea, rhinorhea, loss of appetite, pain in the oropharynx, nasal congestion, colds, sneezing cough[B]</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p>
                    <button class="btn btn-danger w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample2"><i class="bx bx-shield-quarter collapse_icon"></i><br>Janssen</button>
                </p>
                <div class="collapse" id="collapseExample5" style="width: 100%;">
                    <div class="card card-body" style="height: 370px">
                      <ul>
                        <li>Viral Vector (non-replicating)</li>
                        <li>April 19, 2021</li>
                        <li>18 y/o and Above</li>
                        <li>1 doses[A]</li>
                        <li>2°C and 8°C(3months)[A]</li>
                        <li>66.1%-66.9% agaisnt confirmed moderate to severe/critical COVID-19 ~77%-85% agaisnt sever COVID-19[J]</li>
                        <li>injection site pain, redness, swelling, tiredness, headache, muscle pain, chills, fever, nausea[G]</li>
                      </ul>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p>
                    <button class="btn btn-danger w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample3"><i class="bx bx-shield-quarter collapse_icon"></i><br>Barath BioTech</button>
                </p>
                <div class="collapse" id="collapseExample6" style="width: 100%;">
                    <div class="card card-body" style="height: 370px">
                        <ul>
                            <li>Inactivated Virus</li>
                            <li>April 19, 2021</li>
                            <li>18 y/o and Above</li>
                            <li>2 doses, 28 days apart[A]</li>
                            <li>2°C and 8°C[A]</li>
                            <li>80% agaisnt PCR-confirmed symptomatic COVID-19[E]</li>
                            <li>headache, fatigue, fever, body ache, abdominal pain, nausea, vomiting[E]</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3">
            <div class="col-4">
                <p>
                    <button class="btn btn-danger w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample1"><i class="bx bx-shield-quarter collapse_icon"></i><br>Moderna</button>
                </p>
                <div class="collapse" id="collapseExample7" style="width: 100%;">
                    <div class="card card-body" style="height: 370px">
                        <ul class="text-justify">
                            <li>mRNA</li>
                            <li>May 5, 2021</li>
                            <li>18 y/o and Above</li>
                            <li>2 doses, 28 days apart[B]</li>
                            <li>-25°C to -15°C <br>2°C to 8°C(30days)[E]</li>
                            <li>94.1% agaisnt symptomatic COVID-19 100% agaisnt sever COVID-19[B]</li>
                            <li>pain/erthtena/swelling/ on injection site, axillary lymphadenopathy[B] fever, headache, fatigue, myalgia, arthralgia, nausea, vomiting, chills[B]</li>        
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p>
                    <button class="btn btn-danger w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample8" aria-expanded="false" aria-controls="collapseExample2"><i class="bx bx-shield-quarter collapse_icon"></i><br>Novavax</button>
                </p>
                <div class="collapse" id="collapseExample8" style="width: 100%;">
                    <div class="card card-body" style="height: 370px">
                      <ul>
                        <li>Protein Subunit</li>
                        <li>N/A (No EUA application yet)</li>
                        <li>N/A (No EUA application yet)</li>
                        <li>2 doses, 21 days apart</li>
                        <li>2°C to 8°C[H]</li>
                        <li>awaiting official Phase III interim Journal Publication</li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>