<section id="doctors">
    <div class="doctor-page-outer">
        <div class="page-title text-center">
            <h1>Doctors</h1>
        </div>
        <div class="main-content">
            <div class="doc-area">
                <section class="doc">
                    <button class="pre-btn"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="nxt-btn"><i class="fa-solid fa-chevron-right"></i></button>
                    <div class="doc-container">
                        @foreach($doctors as $doctor)
                            <div class="doc-card">
                                <div class="doc-image">
                                    <img src="doctorimage/{{$doctor->image}}" class="card-img-top" alt="...">
                                </div>
                                <div class="doc-info">
                                    <h2 class="doc-name">{{$doctor->name}}</h2>
                                    <p class="doc-short-description">{{$doctor->email}}</p>
                                    <p class="doc-short-description">{{$doctor->phone}}</p>
                                    <p class="doc-short-description">{{$doctor->speciality}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>

        </div>
    </div>
</section>
<script>
    const productContainers = [...document.querySelectorAll('.doc-container')];
    const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
    const preBtn = [...document.querySelectorAll('.pre-btn')];

    productContainers.forEach((item, i) => {
        let containerDimensions = item.getBoundingClientRect();
        let containerWidth = containerDimensions.width;

        nxtBtn[i].addEventListener('click', () => {
            item.scrollLeft += containerWidth;
        })

        preBtn[i].addEventListener('click', () => {
            item.scrollLeft -= containerWidth;
        })
    })
</script>
