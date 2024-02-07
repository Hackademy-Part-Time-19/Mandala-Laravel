<x-layout>

    <x-nav-bar />

    <h1>{{$contatti}}</h1>

    <form action="{{route('send.email')}}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Nome</label>
        <input name="Nome" type="text" class="form-control" aria-describedby="basic-addon1">
      </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input name="Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Messaggio</label>
            <textarea name="Testo" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
      </form>

</x-layout>