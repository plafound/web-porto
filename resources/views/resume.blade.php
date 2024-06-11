@extends('layout.main-layout')

@section('title', 'Resume')

@section('content')
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Curriculum Vitae</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Work Experience</h2>
                                <!-- Download resume button-->
                                <!-- Note: Set the link href target to a PDF file within your project-->
                                <!-- <a class="btn btn-primary px-4 py-3" href="#!">
                                    <div class="d-inline-block bi bi-download me-2"></div>
                                    Download Resume
                                </a> -->
                            </div>
                            <!-- Experience Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">2020 - Now</div>
                                                <div class="small fw-bolder">Freelance Team On Duty</div>
                                                <div class="small text-muted">SARONDRI Event Organizer</div>
                                                <div class="small text-muted">Kediri, East Java</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div>
                                                <ul class="list-unstyled">
                                                    <li>Job Description:
                                                        <ul>
                                                        <li>Providing creative ideas and recommendations in event planning.</li>
                                                        <li>Coordinating all aspects related to the event.</li>
                                                        <li>Taking responsibility for budget and risk management.</li>
                                                        <li>Ensuring that the needs and expectations of clients are met satisfactorily.</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Experience Card 2-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">2022</div>
                                                <div class="small fw-bolder">IT Support (Internship)</div>
                                                <div class="small text-muted">PKBM LISA</div>
                                                <div class="small text-muted">Kediri, East Java</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div><ul class="list-unstyled">
                                                    <li>Job Description:
                                                        <ul>
                                                        <li>Designing and developing a web-based school ToDo application (LISA TODO).</li>
                                                        <li>Designing and developing a web-based Activity Management application (LISA Kegiatan).</li>
                                                        <li>Conducting the planning process for application development (SDLC and UML)</li>
                                                        <li>Designing the application's UI/UX</li>
                                                        <li>Designing the database.</li>
                                                        <li>Analyzing data and required features to support Teaching and Learning Activities.</li>
                                                        <li>Creating comprehensive reports in accordance with educational procedures.</li>
                                                        <li>Assisting in Internet network maintenance</li>
                                                        <li>CCTV installation.</li>
                                                    </ul>
                                                    </li>
                                                </ul>
                                            </div></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Education Section-->
                        <section>
                            <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                            <!-- Education Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">2019 - 2023</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">Informatics Engineering</div>
                                                </div>
                                                <div class="fst-italic">
                                                    <div class="small text-muted">Bachelor's Degree (S1)</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <figure class="text-center">
                                            <h1><i class="bi bi-mortarboard"></i></h1>
                                            <blockquote class="blockquote">
                                                <p class="h3">Universitas Nusantara PGRI Kediri</p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer">
                                                Kediri, East Java</cite>
                                            </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Education Card 2-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">2016 - 2019</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">Mathematic dan Natural Science</div>
                                                </div>
                                                <div class="fst-italic">
                                                    <div class="small text-muted">Senior Highschool (SMA)</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <figure class="text-center">
                                            <h1><i class="bi bi-mortarboard"></i></h1>
                                            <blockquote class="blockquote">
                                                <p class="h3">SMA Negeri 1 Kediri</p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer">
                                                Kediri, East Java</cite>
                                            </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Skills Section-->
                        <section>
                        <h2 class="text-gradient d-inline fw-bolder mb-4">Professional Skill<br><br></h2>
                        
                            <!-- Skillset Card-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <!-- Professional skills list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Hardskill</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0">
                                            <div class="btn btn-light d-flex align-items-center rounded-4 p-3 h-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Progamming & Development</div>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PHP</div></div>
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML/CSS</div></div>
                                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div></div>
                                                        </div>
                                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Python</div></div>
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Java</div></div>
                                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">C++</div></div>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-4">
                                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Framework</span></h3>
                                                        </div>
                                                        <div class="row row-cols-1 row-cols-md-3">
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Laravel</div></div>
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CodeIgniter</div></div>
                                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Bootstrap</div></div>
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-4 mb-md-0">
                                            <div class="btn btn-light d-flex align-items-center rounded-4 p-3 h-100" data-bs-toggle="modal" data-bs-target="#exampleModal2">Data Mining, Analyst, and Database Management</div>
                                                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">My Skill</span></h3>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Microsoft Excel</div></div>
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">SQL</div></div>
                                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Python</div></div>
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-4 mb-md-0">
                                            <div class="btn btn-light d-flex align-items-center rounded-4 p-3 h-100" data-bs-toggle="modal" data-bs-target="#exampleModal3">Perancangan Sistem (UML)</div>
                                                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">My Skill</span></h3>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Flowchart</div></div>
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Use Case Diagram</div></div>
                                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Activity Diagram</div></div>
                                                        </div>
                                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Sequence Diagram</div></div>
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Entity Relation Diagram</div></div>
                                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Data Flow Diagram</div></div>
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div></div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0">
                                            <div class="btn btn-light d-flex align-items-center rounded-4 p-3 h-100" data-bs-toggle="modal" data-bs-target="#exampleModal4">MS Office Specialist & Administration</div>
                                                <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Tools</span></h3>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Word</div></div>
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Excel</div></div>
                                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Powerpoint</div></div>
                                                        </div>
                                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Visio</div></div>
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Project</div></div>
                                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Teams</div></div>
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-4 mb-md-0">
                                            <div class="btn btn-light d-flex align-items-center rounded-4 p-3 h-100" data-bs-toggle="modal" data-bs-target="#exampleModal5">Graphic Design & UI/UX</div>
                                                <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Tools</span></h3>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Adobe Photoshop</div></div>
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Adobe Ilustrator</div></div>
                                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Adobe Lightroom</div></div>
                                                        </div>
                                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Canva</div></div>
                                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Figma</div></div>
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Softskill list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-clipboard"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Softskill</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Time Management</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Leadership</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Creative and Inovatif</div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Able to Work Under Pressure.</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Eager to Learn New Things.</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Problem Solving</div></div>
                                        </div>
                                    </div>
                                    <!-- Language list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-book"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Language</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Bahasa Indonesia (Native)</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">English (Conversation)</div></div>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
    @endsection