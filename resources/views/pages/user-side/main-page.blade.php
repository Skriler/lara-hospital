@extends('layouts.main-layout')

@section('title', 'Main page')

@section('content')
    @include('includes.main-navbar')

    <div class="container">
        <div class="card-form main-page">
            <div class="card-title">
                <h2>Hospital №282</h2>
            </div>

            <div class="card-subtitle">
                <h3>Our hospital</h3>
            </div>
            <div class="card-content">
                <p>
                    The hospital 282 is the building of the clinic of G.A. Klyachkin in Zaporizhzhia, known for the fact that the
                    Tatar poet Gabdulla Tukai died there in 1913. Located on Oleksandrivska street, house 88, at the intersection
                    with Kavi Najmi street, in the Vakhitovsky district.
                </p>
            </div>
            <div class="card-img">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7b/Klyachkin_clinics_-_2020-11-03_%288%29.JPG" alt="hospital-main">
            </div>

            <div class="card-subtitle">
                <h3>History</h3>
            </div>
            <div class="card-content">
                <p>
                    It was built in 1853 as one-storey trade shops for the merchant V.I.Agotov, and by 1875 it had the appearance of a
                    one-storey building with numerous annexes. By the decision of the merchant IN Murev, the son-in-law and heir
                    of Agotov, in 1877 the house was radically rebuilt according to the project of the architect P.V.Lomas, acquiring
                    the semblance of a palace. In 1908, Murev's heirs sold the property to the merchant I.P.Lomas, who turned the building
                    into a tenement house. In 1897, the building was rented for a personal clinic by the famous physiologist and neuropathologist
                    G.A.Uyeil, which soon began to be called the hospital №282.
                </p>
            </div>
            <div class="card-img">
                <img src="https://m.realnoevremya.ru/uploads/article/37/e6/0deb69982eb8d304.jpg" alt="hospital-old">
            </div>

            <div class="card-subtitle">
                <h3>Architecture</h3>
            </div>
            <div class="card-content">
                <p>
                    It is a two-story mansion. The building, made of plastered bricks, belongs to the architecture of the early 20th century
                    in the eclectic style. Two equal facades are richly decorated with stucco moldings. The first floor has rusticated walls
                    and a high plinth, as well as double rectangular windows, which are separated by blades. The openings of the windows
                    on the second floor are made in the form of arches resting on half-columns and pilasters of the Corinthian order.
                    The walls are decorated with the same paired pilasters that support the high profiled frieze and cornice.
                    Above each wall there are massive square pillars topped with vases and supporting a balustrade above the cornice.
                    The entrance doors in the central part of each of the facades are marked with balconies in combination with the fastening
                    of the frieze and cornice.
                </p>
            </div>
            <div class="card-img">
                <img src="http://photos.wikimapia.org/p/00/07/73/84/74_big.jpg" alt="hospital-architecture">
            </div>
        </div>
    </div>

@endsection

