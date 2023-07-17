<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <!-- Experience Section-->
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                    <a class="btn btn-primary px-4 py-3" href="#!" id="CVDownloadLink" target="_blank">
                        <div class="d-inline-block bi bi-download me-2"></div>
                        Download Resume
                    </a>
                </div>

                <div id="experience-list"></div>
            </section>

        </div>
    </div>
</div>

<script>

    async function getResumeLink() {
        try {
            let URL = "/resumeLink";
            // loader show
            document.getElementById('loading-div').classList.remove('d-none')
            document.getElementById('content-div').classList.add('d-none')

            let response = await axios.get(URL);

            // loader hide
            document.getElementById('loading-div').classList.add('d-none')
            document.getElementById('content-div').classList.remove('d-none')

            let link = response.data[0]['downloadLink'];
            document.getElementById('CVDownloadLink').setAttribute('href', link);
        } catch (e) {
            alert(e)
        }
    }

    getResumeLink();

    async function getEducation() {
        let URL = '/experiencesData';

        try {

            // loader show
            document.getElementById('loading-div').classList.remove('d-none')
            document.getElementById('content-div').classList.add('d-none')

            let response = await axios.get(URL);

            // loader hide
            document.getElementById('loading-div').classList.add('d-none')
            document.getElementById('content-div').classList.remove('d-none')

            response.data.forEach((item) => {
                document.getElementById('experience-list').innerHTML += (`
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-primary fw-bolder mb-2">${item.duration}</div>
                                    <div class="small fw-bolder">${item.title}</div>
                                    <div class="small text-muted">${item.designation}</div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div>${item.details}</div>
                            </div>
                        </div>
                    </div>
                </div>
                `);
            })

        } catch (error) {
            alert(error)
        }

    }

    getEducation();
</script>
