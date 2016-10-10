@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <!--
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      -->
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                  <form class="form-horizontal registration-form" role="form" method="POST" >
                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Crear cuenta 1 / 5</h3>
                                    <p>Crea tu cuenta</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            <div class="form-bottom">

                              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  <label for="email" class="col-md-4 control-label">Email</label>

                                  <div class="col-md-6">
                                      <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                      @if ($errors->has('email'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                  <label for="password" class="col-md-4 control-label">Password</label>

                                  <div class="col-md-6">
                                      <input id="password" type="password" class="form-control" name="password" required>

                                      @if ($errors->has('password'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                  <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                  <div class="col-md-6">
                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                      @if ($errors->has('password_confirmation'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('password_confirmation') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Nivel de experiencia: </label>
                                    <div class="col-md-6">
                                      <select class="form-control" name="level" id="level">
                                          <option value="1">Principiante</option>
                                          <option value="2">Intermedio</option>
                                          <option value="3">Avanzado</option>
                                      </select>
                                      @if ($errors->has('level'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('level') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success btn-next">Siguiente</button>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Crear cuenta 2 / 5</h3>
                                    <p>Información Personal</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <input type="text" class="form-text" name="first_name" id="first_name" placeholder="Nombre" required="required" />
                                    <input type="text" class="form-text" name="middle_name" id="middle_name" placeholder="Apellido Paterno" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-text" name="last_name" id="last_name" placeholder="Apellido Materno" />
                                    <input type="text" class="form-text" name="phone1" id="phone1" placeholder="Telefono de emergencia" min="8" max="14" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-text form-control" name="phone2" id="phone2" placeholder="Telefono de emergencia secundario (Opcional)" min="8" max="14"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-text form-control" name="nss" id="nss" placeholder="Numero de seguro social (Opcional)" min="8" max="14"/>
                                </div>
                                <div class="form-group">
                                    <label>Fecha de nacimiento: </label>
                                    Dia <select class="form-control-static" id="days"></select>
                                    Mes <select class="form-control-static" id="months"></select>
                                    Año <select class="form-control-static" id="years"></select>
                                </div>
                                <div class="form-group">
                                    <label>Grupo senguineo: </label>
                                        <select class="form-control-static" id="blood">
                                            <option value="otro">Sin Especificar</option>
                                            <option value="o-">O-</option>
                                            <option value="o+">O+</option>
                                            <option value="a-">A-</option>
                                            <option value="a+">A+</option>
                                            <option value="b-">B-</option>
                                            <option value="b+">B+</option>
                                            <option value="ab-">AB-</option>
                                            <option value="ab+">AB+</option>
                                        </select>
                                </div>
                                <button type="button" class="btn btn-success btn-previous">Volver</button>
                                <button type="button" class="btn btn-success btn-next">Siguiente</button>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Crear cuenta 3 / 5</h3>
                                    <p>Dirección Personal</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <input type="text" class="form-text form-control" name="street" id="street" placeholder="Calle y número" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-text" name="colonia" id="colonia" placeholder="Colonia" required="required" />
                                    <input type="text" class="form-text" name="cp" placeholder="Código Postal" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-text" name="delegacion" id="delegacion" placeholder="Delegación o Municipio" required="required" />
                                    <input type="text" class="form-text" name="state" id="state" placeholder="Estado" required="required" />
                                </div>
                                <button type="button" class="btn btn-success btn-previous">Volver</button>
                                <button type="button" class="btn btn-success btn-next">Siguiente</button>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Crear cuenta 4 / 5</h3>
                                    <p>Información del vehiculo</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-motorcycle"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <input type="text" class="form-text form-control" name="placa" id="placa" placeholder="Placa" required="required" />
                                <div class="form-group">
                                    <input type="text" class="form-text" name="marca_linea" id="marca_linea" placeholder="Marca o Linea" required="required" />
                                    <input type="text" class="form-text" name="modelo" id="modelo" placeholder="Modelo" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-text" name="motor" id="motor" placeholder="Número de motor" required="required" />
                                    <input type="text" class="form-text" name="clave_vehicular" id="clave_vehicular" placeholder="Clave Vehicular" required="required" />
                                </div>
                                <button type="button" class="btn btn-success btn-previous">Volver</button>
                                <button type="button" class="btn btn-success btn-next">Siguiente</button>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Crear cuenta 5 / 5</h3>
                                    <p>Tarjeta de circulación</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                            </div>
                            <div class="form-bottom">

                                <div class="form-group">
                                    <label>Fecha de expedición: </label>
                                    Dia <select class="form-control-static" name="expedition-day" id="full-days"></select>
                                    Mes <select class="form-control-static" name="expedition-month" id="full-months"></select>
                                    Año <select class="form-control-static" name="expedition-year" id="full-years"></select>
                                </div>
                                <div class="form-inline">
                                    <div class="form-group-sm">
                                        <label>Vigencia: </label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="vigencia" id="vigencia" placeholder="Vigencia" required="required" />
                                            <div class="input-group-addon">años</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="placa">Tarjeta de circulacion</label>
                                    <p>Sube una foto de tu tarjeta de circulacion (Formatos validos: .JPG .PNG .PDF)</p>
                                    <input type="file" class="form-text form-control" name="placa" id="placa" placeholder="Placa" required="required" />
                                </div>
                                <div class="form-group">
                                    <p><input type="checkbox" class="form-text" name="tos" id="tos" required> Acepto los  <a href="tos.php">Términos & condiciones</a></p>
                                    <p><input type="checkbox" class="form-text" name="privacy" id="privacy" required> He leido y estoy de acuerdo con el <a href="privacy.php">Aviso de privacidad</a></p>
                                </div>
                                <button type="button" class="btn btn-success btn-previous">Volver</button>
                                <button type="button" class="btn btn-success">Registrar!</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
