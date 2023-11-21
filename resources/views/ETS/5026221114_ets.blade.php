<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Naifa Mumtazah Rendiga's Blog </title>
    <link rel="stylesheet" href="/css/style2.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@900&family=Poppins:wght@500&display=swap"
        rel="stylesheet">

    <!-- icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function validateform() {
            var msg = document.getElementById("msg");

            if (msg.value == "") {
                msg.focus();
                msg.placeholder = "Message"
                alert("Messages should not be empty.");
                return false;
            }
        }
    </script>

</head>

<body>
    <div id="main">
        <div class="row">
            <!-- nav -->
            <div id="nav">
                Neva

                <!-- logo kontak -->
                <div id="navright">
                    <a href="#hello"> Home </a>

                    <a href="#experience"> Experience </a>

                    <a href="#skill"> Skill </a>

                    <a href="#contact"> Contact Me </a>

                    <a href="https://www.linkedin.com/in/naifa-mumtazah-rendiga/" target="_blank">
                        <div style="font-size: 35px;">
                            <i class="ri-linkedin-box-fill"></i>
                        </div>
                    </a>

                    <a href="https://instagram.com/narendiga?igshid=OGQ5ZDc2ODk2ZA==" target="_blank">
                        <div style="font-size: 35px;">
                            <i class="ri-instagram-line"></i>
                        </div>
                    </a>
                </div>
            </div>

            <div id="isi">
                <!-- biodata -->
                <div id="hello">
                    <div class="row">
                        <div class="col-3">
                            <img src="/img/foto.png" width="100%" height="100%">
                        </div>

                        <div class="col-9">
                            <h1><b> Hi, Let's Get to Know Me! </b></h1>
                            <p>
                                Committed and responsible to work and likes to communicate with others. Desire
                                to learn new things in order to gain experience and expand knowledge and be able to
                                develop self-potential.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <table class="table">
                        <tr>
                            <td> Full Name </td>
                            <td> Naifa Mumtazah Rendiga </td>
                        </tr>
                        <tr>
                            <td> Nick Name </td>
                            <td> Neva </td>
                        </tr>
                        <tr>
                            <td> Place and Date of Birth </td>
                            <td> 27 August 2004, Surabaya </td>
                        </tr>
                        <tr>
                    </table>
                </div>

                <div id="experience">
                    <h1><b> Experience </b></h1>

                    <div class="row">
                        <div class="col-md-3 col-sm-12 mb-3">
                            <div class="card">
                                <img src="/img/pweb1.jpg" class="card-img-top">

                                <div class="card-body">
                                    <h5><b> Ini Lho ITS! 2023 </b></h5>
                                    <p> Staff of Consumption <br /><br /><br /></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="card">
                                <img src="/img/pweb2.jpg" class="card-img-top">

                                <div class="card-body">
                                    <h5><b> GERIGI ITS 2023 </b></h5>
                                    <p> Expert Staff of Consumption <br /><br /></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="card">
                                <img src="/img/pweb3.jpg" class="card-img-top">

                                <div class="card-body">
                                    <h5><b> SocioTrip </b></h5>
                                    <p> Intern Staff of HMSI Social Development Department </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="card">
                                <img src="/img/pweb4.jpg" class="card-img-top">

                                <div class="card-body">
                                    <h5><b> Ini Lho ITS! 2024 </b></h5>
                                    <p> Expert Staff of Consumption <br /><br /></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="skill">
                    <div class="row">
                        <div class="col-6">
                            <h1><b> Hard Skill </b></h1>

                            <p> Google Workspace </p>
                            <div class="progress border">
                                <div class="progress-bar bg-dark" style="width:90%"></div>
                            </div><br />

                            <p> Microsoft Office </p>
                            <div class="progress border">
                                <div class="progress-bar bg-dark" style="width:70%"></div>
                            </div><br />

                            <p> Figma </p>
                            <div class="progress border">
                                <div class="progress-bar bg-dark" style="width:50%"></div>
                            </div><br />
                        </div>

                        <div class="col-6">
                            <h1><b> Soft Skill </b></h1>

                            <p> Communication </p>
                            <div class="progress border">
                                <div class="progress-bar bg-dark" style="width:90%"></div>
                            </div><br />

                            <p> Adaptability </p>
                            <div class="progress border">
                                <div class="progress-bar bg-dark" style="width:80%"></div>
                            </div><br />

                            <p> Time Management </p>
                            <div class="progress border">
                                <div class="progress-bar bg-dark" style="width:65%"></div>
                            </div><br />
                        </div>
                    </div>
                </div>

                <div id="contact">
                    <h1><b> Contact Me! </b></h1>

                    <form action="#nav" method="get" onsubmit="return validateform();">
                        <div class="form-group">
                            <label for="msg"> Messeage </label>
                            <input type="text" class="form-control" id="msg">
                            <div id="msg" class="btn-danger"></div>
                        </div>

                        <input type="submit" value="Send" class="btn btn-primary">
                    </form>
                </div>

                <section id="neva">
                    <div class="row">
                        <div class="col-4">
                            <li><a href="/tugas1" target="_blank"> Tugas Linktree </a></li>
                            <li><a href="/layout" target="_blank"> Tugas Layout </a></li>
                            <li><a href="/hello" target="_blank"> Pertemuan 1 </a></li>
                        </div>

                        <div class="col-4">
                            <li><a href="/link" target="_blank"> Pertemuan 2_1 </a></li>
                            <li><a href="/style" target="_blank"> Pertemuan 2_2 </a></li>
                            <li><a href="/responsive" target="_blank"> Pertemuan 4 </a></li>
                        </div>

                        <div class="col-4">
                            <li><a href="/js1" target="_blank"> Pertemuan 6_1 </a></li>
                            <li><a href="/js2" target="_blank"> Pertemuan 6_2 </a></li>
                            <li><a href="/validasi" target="_blank"> Pertemuan 7 </a></li>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    </div>
    </div>
</body>

</html>
