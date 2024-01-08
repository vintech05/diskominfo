<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="app.js" defer></script>
</head>

<body>
    <div class="sidebar-wrapper">
        <div class="sidebar">
            <div class="text-display">
                <span>DISKOMINFOSTANDI</span>
                <div class="display-content">
                    <div class="media-social">
                        <a href="https://www.facebook.com/KominfostandiBekasi/"><i
                                class="fa-brands fa-facebook"></i></i></a>
                        <a href="https://twitter.com/KominfoBekasi"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com/diskominfobekasi/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCAtdu1ymK6EFWZ8RtoNPSOg"><i
                                class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-content">
                <ul class="sidebar-item active">
                    <li>
                        <a href="dashboard.php">
                            <i class='bx bxs-dashboard dashboard-icon'></i>
                            <span>dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul class="sidebar-item">
                    <li>
                        <a href="userprofile.html">
                            <i class='bx bx-user'></i>
                            <span>user profile</span>
                        </a>
                    </li>
                </ul>
                <div class="majors-wrapper">
                    <div class="majors-cta">
                        <i class='bx bx-git-branch'></i>
                        <span>Bidang</span>
                        <i class="fa-solid fa-angle-down dropdown-cta dropdown-icon"></i>
                    </div>
                    <div class="majors-toggle">
                        <ul class="sidebar-item">
                            <li>
                                <a href="pip.html">
                                    <span>pip</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="sidebar-item">
                            <li>
                                <a href="tik.html">
                                    <span>tik</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="sidebar-item">
                            <li>
                                <a href="standi.html">
                                    <span>standi</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="sidebar-item">
                            <li>
                                <a href="e-gov.html">
                                    <span>e-gov</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="sidebar-item">
                    <li>
                        <a href="lokasi.html">
                            <i class="lni lni-map-marker"></i>
                            <span>lokasi</span>
                        </a>
                    </li>
                </ul>
                <ul class="sidebar-item log-out">
                    <li>
                        <a href="login.php">
                            <i class="fa-solid fa-right-from-bracket log-out-icon"></i>
                            <span>Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nav-wrapper">
        <nav>
            <div class="welcome-display">
                <span>Dashboard</span>
            </div>
            <div class="hamburger">
                <i class="fa-solid fa-bars hamburger-icon" style="color: #b0b3bc;"></i>
            </div>
        </nav>
    </div>
    <main>
        <div class="main-content">
            <div class="majors-display">
                <div class="card-wrapper">
                    <div class="card-container">
                        <div class="card">
                            <div class="card-content">
                                <div class="title akuntasi-card">
                                    <h1>PIP</h1>
                                    <i class='bx bx-world'></i>
                                </div>
                                <div class="details">
                                    <ul>
                                        <li><a href="pip.html">Lihat Detail</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="title akuntasi-card">
                                    <h1>E-Gov</h1>
                                    <i class='bx bx-wifi'></i>
                                </div>
                                <div class="details">
                                    <ul>
                                        <li><a href="e-gov.html">Lihat Detail</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="title akuntasi-card">
                                    <h1>STANDI</h1>
                                    <i class='bx bx-check-shield'></i>
                                </div>
                                <div class="details">
                                    <ul>
                                        <li><a href="standi.html">Lihat Detail</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="title akuntasi-card">
                                    <h1>TIK</h1>
                                    <i class='bx bx-network-chart'></i>
                                </div>
                                <div class="details">
                                    <ul>
                                        <li><a href="tik.html">Lihat Detail</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <div class="chart-wrapper">
        <div class="line-chart-container">
            <canvas id="lineChart"></canvas>
        </div>
    </div>

    <script>
        const lineChart = document.getElementById('lineChart').getContext('2d');

        // var gradient = lineChart.createLinearGradient(0, 0, 0, 300);
        // gradient.addColorStop(0, '#007bff');
        // gradient.addColorStop(1, '#007bff');

        new Chart(lineChart, {
            type: 'line',
            data: {
                labels: ['Jatisampurna',
                    'Bekasi Barat',
                    'Bekasi Timur',
                    'Pondok Gede',
                    'Medansatria',
                    'Jatiasih',
                    'Rawalumbu',
                    'Mustikajaya',
                    'Bantargebang',
                    'Pondokmelati',],
                datasets: [{
                    label: 'Populasi Masyarakat',
                    data: [123924,
                        281681,
                        257025,
                        251195,
                        162119,
                        247362,
                        220699,
                        213515,
                        107216,
                        131122],
                    borderWidth: 3,
                    pointRadius: 0,
                    fill: true
                }]
            },
            options: {
                maintainAspectRatio: false,
                elements: {
                    line: {
                        // backgroundColor: gradient,
                        tension: 0.2
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>