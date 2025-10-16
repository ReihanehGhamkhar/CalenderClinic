<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>moodify</title>
  <link rel="stylesheet" href="./styles/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="./styles/app.css">
  <link rel="stylesheet" href="./styles/fonts.css">
  <link rel="stylesheet" href="./styles/custom.css">
</head>

<body>
  <!-- All App Icons -->
  <svg class="hidden">
    <symbol id="setting" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
      <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
    </symbol>
    <symbol id="bell" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
    </symbol>
    <symbol id="search-heart" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
      <path d="M6.5 13a6.47 6.47 0 0 0 3.845-1.258h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1A6.47 6.47 0 0 0 13 6.5 6.5 6.5 0 0 0 6.5 0a6.5 6.5 0 1 0 0 13m0-8.518c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018" />
    </symbol>
  </svg>
  <div class="container-fluid">
    <div class="homepage-wrapper row">
      <!-- App Sidebar -->
      <nav class="sidebar d-sm-none d-lg-block col-xl-2 col-lg-3 col-md-4 fixed-top py-3">
        <div class="moodify-wrapper">
          <a class="moodify" href="#">moodify</a>
        </div>
        <ul class="flex-column pt-4">
          <li class="">
            <a class="" href="#"><i class="bi bi-house-door me-2"></i> Dashboard</a>
          </li>
          <li class="">
            <a class=" active" href="#"><i class="bi bi-chat-dots me-2"></i> Counselling</a>
          </li>
          <li class="">
            <a class="" href="#"><i class="bi bi-person-badge me-2"></i> Doctors</a>
          </li>
          <li class="">
            <a class="" href="#"><i class="bi bi-people me-2"></i> Patients</a>
          </li>
          <li class="">
            <a class="" href="#"><i class="bi bi-building me-2"></i> Departments</a>
          </li>
          <li class="">
            <a class="" href="#"><i class="bi bi-capsule me-2"></i> Medicines</a>
          </li>
          <li class="">
            <a class="" href="#"><i class="bi bi-receipt me-2"></i> Invoices</a>
          </li>
          <li class="">
            <a class="" href="#"><i class="bi bi-envelope me-2"></i> Emails</a>
          </li>
        </ul>
      </nav>

      <!-- App Header -->
      <div class="col-xl-10 col-lg-9 col-md-8 ms-auto">
        <header class="py-3">

          <div class="header d-flex align-items-center justify-content-between">

            <div class="page-title me-auto">
              <h2>Counselling</h2>
            </div>

            <div class="toolbar d-flex">
              <!-- Search -->
              <div class="search-box p-1 input-group rounded-5">
                <div class="mx-2">
                  <svg class="search">
                    <use href="#search-heart"></use>
                  </svg>
                </div>
                <input class="search-box-input outline-0 border-0" type="text" placeholder="Search anything">
              </div>
              <!-- Setting -->
              <div class="icon-wrapper ms-1 d-flex rounded-5 p-2">
                <svg class="header-icon">
                  <use href="#setting"></use>
                </svg>
              </div>
              <!-- Notification -->
              <div class="icon-wrapper ms-1 d-flex rounded-5 p-2">
                <svg class="header-icon">
                  <use href="#bell"></use>
                </svg>
              </div>
              <!-- User Admin -->
              <div class="icon-wrapper ms-1 rounded-5 d-flex ">
                <img class="user" src="./images/admin.jpg" alt="admin">
                <div class="user-name ms-2">
                  <h3>MillaWillow</h3>
                  <p>Admin</p>
                </div>
              </div>
            </div>
          </div>
        </header>
      </div>
    </div>

    <!-- App Main -->
    <main class="ms-auto">
      <!-- Stats Cards -->
      <div class="row">
        <div class="col-md-3">
          <div class="card stat-card">
            <div class="card-body">
              <h5 class="card-title">Total Counselling</h5>
              <h2>275</h2>
              <p><span class="text-success">+23%</span> from last week</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card stat-card">
            <div class="card-body">
              <h5 class="card-title">Completed Counselling</h5>
              <h2>105</h2>
              <p><span class="text-success">+5.4%</span> from last week</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card stat-card">
            <div class="card-body">
              <h5 class="card-title">Pending Counselling</h5>
              <h2>153</h2>
              <p><span class="text-danger">-7.6%</span> from last week</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card stat-card">
            <div class="card-body">
              <h5 class="card-title">Cancelled Counselling</h5>
              <h2>17</h2>
              <p><span class="text-success">+3.42%</span> from last week</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Today's Counsellings and Calendar -->
      <div class="row mt-4">
        <div class="col-md-6">
          <h4>Today's Counsellings</h4>
          <!-- calendar + list -->
          <div class="btn-group mb-3" role="group" aria-label="Calendar days" id="cldays">

          </div>

          <ul class="list-group" id="shift_list">

          </ul>
        </div>

        <!-- Two-column area: Pending & Cancelled -->
        <div class="col-md-6">
          <div class="row gx-3">
            <div class="col-12">
              <div class="d-flex align-items-start justify-content-between">
                <h4 class="mb-3 me-3">Pending Counsellings</h4>
                <h4 class="mb-3 text-muted">Cancelled Counsellings</h4>
              </div>
              <div class="row g-3">
                <!-- Pending -->
                <div class="col-md-6">
                  <div class="pending-list">
                    <div class="pending-item d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center">
                        <img src="./images/avatar1.jpg" class="avatar" alt="Liam Thompson">
                        <div>
                          <div class="patient-name">Liam Thompson</div>
                          <div class="doctor-name">Dr. Laurent Blake</div>
                          <div class="session-type">Family Counselling</div>
                          <div class="time">2028-09-20 • 01:45 PM</div>
                        </div>
                      </div>
                      <div>
                        <button class="btn btn-reject me-2">Reject</button>
                        <button class="btn btn-accept">Accept</button>
                      </div>
                    </div>

                    <div class="pending-item d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center">
                        <img src="./images/avatar4.jpg" class="avatar" alt="Robert Smith">
                        <div>
                          <div class="patient-name">Robert Smith</div>
                          <div class="doctor-name">Dr. Laura Mitchell</div>
                          <div class="session-type">Group Counselling</div>
                          <div class="time">2028-09-21 • 10:30 AM</div>
                        </div>
                      </div>
                    </div>

                    <div class="pending-item d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center">
                        <img src="./images/avatar2.jpg" class="avatar" alt="Jessica Adams">
                        <div>
                          <div class="patient-name">Jessica Adams</div>
                          <div class="doctor-name">Dr. Mark Peterson</div>
                          <div class="session-type">Trauma Counselling</div>
                          <div class="time">2028-09-21 • 12:00 PM</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Cancelled -->
                <div class="col-md-6">
                  <div class="cancelled-list">
                    <div class="cancel-item d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center">
                        <img src="./images/avatar5.jpg" class="avatar" alt="Samantha Brown">
                        <div>
                          <div class="patient-name">Samantha Brown</div>
                          <div class="doctor-name">Dr. Paul Carter</div>
                          <div class="session-type">Cognitive Behavioral Therapy</div>
                          <div class="time">2028-09-20 • 02:30 PM</div>
                        </div>
                      </div>
                      <button class="btn btn-notify">Notify Doctor</button>
                    </div>

                    <div class="cancel-item d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center">
                        <img src="./images/avatar6.jpg" class="avatar" alt="Olivia Martinez">
                        <div>
                          <div class="patient-name">Olivia Martinez</div>
                          <div class="doctor-name">Dr. Gemma O’Connor</div>
                          <div class="session-type">Couples Counselling</div>
                          <div class="time">2028-09-20 • 03:00 PM</div>
                        </div>
                      </div>
                    </div>

                    <div class="cancel-item d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center">
                        <img src="./images/avatar3.jpg" class="avatar" alt="Jacob Thompson">
                        <div>
                          <div class="patient-name">Jacob Thompson</div>
                          <div class="session-type">Individual Counselling</div>
                          <div class="time">2028-09-19 • 02:30 PM</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> <!-- end cancelled col -->
              </div> <!-- end inner row -->
            </div> <!-- end col-12 -->
          </div>
        </div>
      </div>

    </main>
  </div>


  </div>



  <script src="./scripts/bootstrap.min.js"></script>
  <script>
    const getAllDaysUrl = '/get_alldays.php';
    const daysContainer = document.getElementById('cldays');
    const shiftList = document.getElementById('shift_list');

    function createShiftList(shifts) {
      shiftList.innerHTML = '';

      if (shifts.length === 0) {
        shiftList.textContent = 'There is no shift';
        return;
      }

      const ul = document.createElement('ul');
      ul.className = 'list-group';

      shifts.forEach(shift => {
        const li = document.createElement('li');
        li.className = 'list-group-item d-flex justify-content-between align-items-center';

        li.innerHTML = `
      <div>
        <img src="${shift.photo_url}" class="rounded-circle me-2 avatar" alt="Avatar">
        ${shift.name}
      </div>
      <div>
        <span class="badge ${shift.status === 'Active' ? 'bg-success' : shift.status === 'Pending' ? 'bg-warning' : 'bg-danger'}">
          ${shift.status}
        </span>
        <small class="text-muted ms-2">${shift.shift_time}</small>
      </div>
    `;
        ul.appendChild(li);
      });

      shiftList.appendChild(ul);
    }

    function fetchShifts(dayId) {
      fetch(`/get_shift_bydays.php?day_id=${dayId}`)
        .then(res => res.json())
        .then(createShiftList)
        .catch(err => {
          console.error('Error fetching shifts:', err);
          shiftList.textContent = 'Error loading shifts';
        });
    }

    function createDayButtons(days) {
      days.forEach(day => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'btn calendar-btn';
        btn.innerHTML = `${day.day_name}<br>${day.day_number}`;
        btn.addEventListener('click', () => fetchShifts(day.id));
        daysContainer.appendChild(btn);
      });
    }

    fetch(getAllDaysUrl)
      .then(res => res.json())
      .then(createDayButtons)
      .catch(err => console.error('Error fetching days:', err));
  </script>

</body>


</html>
