@extends('backend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <div class="content">
                    <h3>{{$user->name}}</h3>

                    <div class="row table-block">
                        <div class="col-sm-12">
                            <h4>
                                Tables
                            </h4>
                        </div>
                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
                            <p>
                                Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem
                                nec elit.
                                Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et
                                magnis dis
                                parturient montes, nascetur ridiculus mus.
                            </p>
                        </div>
                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
                            <div class="table-responsive">
                                <span class="border-top"></span>
                                <span class="border-bottom"></span>
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th>First column</th>
                                        <th>Second column</th>
                                        <th>Third column</th>
                                        <th>Fourth column</th>
                                    </tr>
                                    <tr>
                                        <td>One</td>
                                        <td>no</td>
                                        <td>yes</td>
                                        <td>yes,all</td>
                                    </tr>
                                    <tr>
                                        <td>Two</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>all</td>
                                    </tr>
                                    <tr>
                                        <td>Three</td>
                                        <td>$399</td>
                                        <td>$599</td>
                                        <td>$799</td>
                                    </tr>
                                    <tr>
                                        <td>Four</td>
                                        <td>Four</td>
                                        <td>Four</td>
                                        <td>Four</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection