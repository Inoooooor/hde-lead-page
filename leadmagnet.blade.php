
@extends('layout')

@section('title')
    Закрытая экскурсия в отдел поддержки HelpDeskEddy
@stop

@section('desc')
    Закрытая экскурсия в отдел поддержки HelpDeskEddy
@stop

@section('head')
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link
      href="https://vjs.zencdn.net/8.3.0/video-js.css"
      rel="stylesheet"
    />
    <script type="module" crossorigin src="/css/leadmagnet/index-ac28c506.js"></script>
    <link rel="stylesheet" href="/css/leadmagnet/index-ccb85102.css">
@stop   


@section('content')

<section
      name="lead-form"
      class="vh-75 vw-75 mb-4 container-lg col-11"
    >
      <div class="col-md-12 col-sm-12 d-flex flex-column flex-lg-row flex-wrap grid-custom">
        <h2 class="fs-2 fs-lg-1 col-lg-12 order-0 fw-semibold header-grid-area pt-5 pt-lg-0">
          Закрытая экскурсия в отдел поддержки HelpDeskEddy
        </h2>
        <p class="mb-4 order-1 col-12 col-lg-12 fw-semibold fs-7 fs-sm-6 fs-md-5 description-grid-area">
          На нашей системе работают службы поддержки Детского мира, Сбермаркета, Ламоды. Мы построили у себя эталонный
          отдел поддержки и показываем всё.
        </p>
        <form
          class="order-2 order-lg-2 col-lg-12 form-grid-area"
          id="leadForm"
        >
          <div class="mb-2">
            <input
              name="email"
              required
              type="email"
              class="form-control rounded-pill py-2 border border-primary fs-7 fs-sm-6 fs-md-5 py-md-3 px-md-4"
              id="email"
              placeholder="Рабочая эл.почта"
            />
          </div>
          <div class="input-group mb-2">
            <input
              name="phone"
              required
              id="phone"
              type="tel"
              name="phone"
              class="border border-primary fs-7 fs-sm-6 fs-md-5 py-md-3 form-control rounded-pill py-2 px-md-6"
            />
          </div>
          <div class="mb-2">
            <select
              name="job-position"
              required
              id="jobPosition"
              aria-label="Floating label select example "
              class="form-select rounded-pill py-2 border border-primary fs-7 fs-sm-6 fs-md-5 py-md-3 px-md-4"
            >
              <option value="">Ваша должность</option>
              <option value="Владелец">Владелец</option>
              <option value="Руководитель отдела продаж">Руководитель отдела продаж</option>
              <option value="Другая должность">Другая должность</option>
            </select>
          </div>
          <div class="mb-2">
            <select
              name="employeesAmount"
              required
              id="employeesAmount"
              aria-label="Floating label select example"
              class="form-select rounded-pill py-2 border border-primary fs-7 fs-sm-6 fs-md-5 py-md-3 px-md-4"
            >
              <option value="">Кол-во сотрудников поддержки</option>
              <option value="1-5">1-5</option>
              <option value="6-40">6-40</option>
              <option value="40-100">40-100</option>
              <option value="100+">100+</option>
            </select>
          </div>
          <div class="form-check mb-2 fs-7 fs-sm-6 fs-md-5 py-md-3 px-md-4">
            <input
              name="PDA"
              required
              class="form-check-input"
              type="checkbox"
              id="flexCheckDefault"
            />
            <label
              class="form-check-label"
              for="flexCheckDefault"
            >
              Я согласен(а) с
              <a
                href="https://helpdeskeddy.ru/private_policy.pdf"
                target="_blank"
                >политикой обработки персональных данных</a
              >
            </label>
          </div>
          <button
            type="submit"
            class="w-100 py-2 rounded-pill text-white border border-0 submit-btn fs-7 fs-sm-6 fs-md-5 py-md-3 mb-2"
          >
            Запишите меня на удобное время
          </button>
          <div
            class="alert alert-error bg-danger bg-opacity-50 text-white fs-7 fs-sm-6 fs-md-5 rounded-1"
            style="display: none"
          >
            Неверный формат телефона
          </div>
          <div
            class="alert alert-info fs-7 fs-sm-6 fs-md-5"
            style="display: none"
          ></div>
        </form>
        <div class="col-12 col-lg-12 order-1 mb-4 video-grid-area">
          <video
            id="my-video"
            class="video-js"
            controls
            preload="auto"
            width="640"
            height="264"
            poster="https://helpdeskeddy.ru/video/start/start.webp"
            data-setup='{"aspectRatio": "16:9"}'
          >
            <source
              src="https://helpdeskeddy.ru/video/start/start.mp4"
              type="video/mp4"
            />
            <source
              src="https://helpdeskeddy.ru/video/start/start.webm"
              type="video/webm"
            />
            <source
              src="https://helpdeskeddy.ru/video/start/start.ogv"
              type="video/ogg"
            />
            <p class="vjs-no-js">
              To view this video please enable JavaScript, and consider upgrading to a web browser that
              <a
                href="https://videojs.com/html5-video-support/"
                target="_blank"
                >supports HTML5 video</a
              >
            </p>
          </video>
        </div>
      </div>
    </section>
    <div class="bg-primary bg-opacity-5 min-vh-100 pb-4">
      <section
        name="lead-description"
        class="min-vh-100 container-lg col-11"
      >
        <div class="row">
          <h2 class="fs-2 fw-semibold col my-5">Длительность 60 минут</h2>
        </div>
        <div class="row gx-3 d-flex flex-column flex-sm-row justify-content-evenly">
          <div class="col-sm-5 col-12 mb-2 rounded-5 d-flex align-items-center shadow bg-light p-2 position-static">
            <img
              src="https://helpdeskeddy.ru/images/banner/hde-banner-circle.svg"
              alt="hde"
              class="col-4"
            />
            <div class="col-8 text-center fs-sm-6 fs-md-4 fs-lg-3 overflow-hidden">
              <p class="m-0">Экскурсия бесплатная</p>
            </div>
          </div>
          <div class="col-sm-5 col-12 mb-2 rounded-5 d-flex align-items-center shadow bg-light p-2 position-static">
            <img
              src="https://helpdeskeddy.ru/images/banner/hde-banner-circle.svg"
              alt="hde"
              class="col-4"
            />
            <div class="col-8 text-center fs-sm-6 fs-md-4 fs-lg-3 overflow-hidden">
              <p class="m-0">Место проведения Zoom-online</p>
            </div>
          </div>
        </div>
        <div class="row">
          <h2 class="fs-2 fw-semibold my-5">Бонусы после регистрации</h2>
        </div>
        <div class="row d-flex justify-content-evenly gap-2">
          <div
            class="card p-0 text-center col-xl-2 col-5 col-lg-3 mx-1 my-1 col-sm-4 rounded-5 shadow min-w-fixed fs-7 fs-sm-6"
          >
            <img
              src="/images/table-book-0335e8ba.jpg"
              class="card-img-top rounded-5 p-2"
              alt="table-book"
            />
            <div class="card-body">
              <p class="card-title fw-semibold fs-7 fs-sm-6">Настольная книга руководителя службы поддержки</p>
            </div>
          </div>
          <div
            class="card p-0 text-center col-xl-2 col-5 col-lg-3 mx-2 my-1 col-sm-4 rounded-5 shadow min-w-fixed fs-7 fs-sm-6"
          >
            <img
              src="/images/e-commerce-templates-048dbfdf.jpg"
              class="card-img-top rounded-5 p-2"
              alt="e-commerce-templates"
            />
            <div class="card-body">
              <p class="card-title fw-semibold fs-7 fs-sm-6">Шаблоны для E-commerce</p>
            </div>
          </div>
          <div
            class="card p-0 text-center col-xl-2 col-5 col-lg-3 mx-2 my-1 col-sm-4 rounded-5 shadow min-w-fixed fs-7 fs-sm-6"
          >
            <img
              src="/images/nps-collect-guide-142d5f2d.jpg"
              class="card-img-top rounded-5 p-2"
              alt="nps-collect-guide"
            />
            <div class="card-body">
              <p class="card-title fw-semibold fs-7 fs-sm-6">Гид по сбору NPS</p>
            </div>
          </div>
          <div
            class="card p-0 text-center col-xl-2 col-5 col-lg-3 mx-2 my-1 col-sm-4 rounded-5 shadow min-w-fixed fs-7 fs-sm-6"
          >
            <img
              src="/images/metrics-book-e0099d9b.jpg"
              class="card-img-top rounded-5 p-2"
              alt="metrics-book"
            />
            <div class="card-body">
              <p class="card-title fw-semibold fs-7 fs-sm-6">Что измерять в работе поддержки</p>
            </div>
          </div>
          <div
            class="card p-0 text-center col-xl-2 col-5 col-lg-3 mx-2 my-1 col-sm-4 rounded-5 shadow min-w-fixed fs-7 fs-sm-6"
          >
            <img
              src="/images/communication-templates-05e9d7d7.jpg"
              class="card-img-top rounded-5 p-2"
              alt="communication-templates"
            />
            <div class="card-body">
              <p class="card-title fw-semibold fs-7 fs-sm-6">Шаблоны для коммуникации с клиентами</p>
            </div>
          </div>
        </div>
      </section>
    </div>
    <script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>
@stop