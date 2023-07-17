<div class="container px-5 my-5">
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <section>
                <div class="mb-0">
                    <div class="d-flex align-items-center mb-4">
                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i
                                class="bi bi-code-slash"></i></div>
                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                    </div>

                    <div class="row row-cols-1 row-cols-md-3 mb-4" id="language-list"></div>
                </div>
            </section>
        </div>
    </div>
</div>


<script>
    async function LanguageList() {
        try {
            let URL = '/languageData'

            // loader show
            document.getElementById('loading-div').classList.remove('d-none')
            document.getElementById('content-div').classList.add('d-none')
            // debugger; // showing loader

            let response = await axios.get(URL);

            // loader hide
            document.getElementById('loading-div').classList.add('d-none')
            document.getElementById('content-div').classList.remove('d-none')


            response.data.forEach((item) => {
                document.getElementById('language-list').innerHTML += (`
                <div class="col p-2 mb-4 mb-md-0">
                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                        ${item['name']}
                    </div>
                </div>
                `);
            })
        } catch (error) {
            alert(error);
        }
    }

    LanguageList();
</script>
