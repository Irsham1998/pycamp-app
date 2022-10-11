@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card mt-3">
                    <div class="card-header">
                        My Camps
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>User</td>
                                    <td>Camp</td>
                                    <td>Price</td>
                                    <td>Register Data</td>
                                    <td>Paid Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($checkouts as $checkout)
                                    <tr>
                                        <td>{{ $checkout->User->name }}</td>
                                        <td>{{ $checkout->camps->title }}</td>
                                        <td>
                                            <strong>
                                                ${{ $checkout->total }}k
                                                @if ($checkout->discount_id)
                                                    <span class="badge bg-success">Disc
                                                        {{ $checkout->discount_percentage }}%</span>
                                                @endif
                                            </strong>
                                        </td>
                                        <td>{{ $checkout->created_at->format('M d Y') }}</td>
                                        <td>
                                            <strong>{{ $checkout->payment_status }}</strong>
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">
                                            No camps registered
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
