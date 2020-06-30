@extends('master')

@section('content')
<div class="container">
    <h1 text-align="center">My GuestBook Board</h1>
    <!--我要留言 op-->
    <form id="form1">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td width = 300px>
                        <label>Name</label>
                    </td>
                    <td>
                        <input id="user_name" name="user_name"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Message</label>
                    </td>
                    <td colspan="7">
                        <textarea rows="4" cols="70"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="10">
                        <button type="button" class="btn btn-light">Leave Message!</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <!--我要留言 ed-->
    <!--留言區 op-->
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td style="text-align:left">
                    <h5 style="background-color:#ad9393b5">Date</h5>
                    <p>123</p>
                    <h5 style="background-color:#ad9393b5">Name</h5>
                    <p>123</p>
                    <h5 style="background-color:#ad9393b5">Message</h5>
                    <p>123</p>
                </td>
            </tr>
        </tbody>
    </table>
    <!--留言區 ed-->
</div>
@endsection

@section('modal')
@endsection
