@extends('layouts.default', ['title' => 'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Nous contacter</h2>
                <p>
                    Si vous rencontrez des problèmes avec nos services,
                    Veuiller <a href="mailto:frankguekeng11@gmail.com">demander de l'aide</a>.
                </p>

                <form class="" action="#" method="POST">
                    <div class="form-group">
                        <label for="name" class="control-label">Nom</label>
                        <input type="text" name="name" id="name" class="form-control" required >
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required >
                    </div>

                    <div class="form-group">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="10" cols="10" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="button" name="button" class="btn btn-primary btn-block">Soumettre &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
