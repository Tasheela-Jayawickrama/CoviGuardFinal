
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.all-css')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .doc {
            font-family: Ubuntu, serif;
            position: relative;
            overflow: hidden;
            padding: 20px;
        }
        .doc-container {
            padding: 0 50px;
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            height: 600px;
            align-items: center;
        }

        .doc-container::-webkit-scrollbar {
            display: none;
        }

        .doc-card {
            flex: 0 0 auto;
            width: 300px;
            height: 450px;
            margin-right: 40px;
            box-shadow: 0 0 10px darkblue;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            border-radius: 25px 25px 0 0 ;
        }

        .doc-image {
            position: relative;
            width: 100%;
            height: 250px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 25px 25px 0 0 ;
            background-size: cover;
            background-position: center;

        }
        .doc-info {
            width: 100%;
            height: 100%;
            padding: 20px;

        }

        .doc-name {
            text-transform: capitalize;
        }

        .doc-short-description {
            width: 100%;
            height: 20px;
            line-height: 20px;
            overflow: hidden;
            opacity: 0.5;
            text-transform: capitalize;
            margin: 5px 0;
        }


        .pre-btn,
        .nxt-btn {
            border: none;
            width: 10vw;
            height: 100%;
            position: absolute;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            /*background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #fff 100%);*/
            background: transparent;
            cursor: pointer;
            z-index: 8;
        }

        .pre-btn {
            left: 0;
        }

        .nxt-btn {
            right: 0;
        }

        .pre-btn img,
        .nxt-btn img {
            opacity: 0.2;
        }

        .pre-btn:hover img,
        .nxt-btn:hover img {
            opacity: 1;
        }
        .fa-chevron-right,
        .fa-chevron-left{
            font-size: 100px;
            color: blue;
        }
    </style>
</head>

<body>
<section class="doc">
    <h1 class="title text-center">Doctors</h1>
    <button class="pre-btn"><i class="fa-solid fa-chevron-left"></i> </button>
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
</body>

</html>

