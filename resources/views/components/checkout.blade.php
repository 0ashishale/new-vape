@extends('components.main.master')
<div style="background-color: black">
    <x-navbar />
    <x-header />

    <div class="checkout">
        <h1>YOUR SHOOPING BASKET</h1>
        <div class="table">

            <table class="checkout__table" style="color: aliceblue">
                <tr>
                    <th>ITEMS</th>
                    <th>PRICE</th>
                    <th>QTY</th>
                    <th>TOTAL</th>
                </tr>

                <tr>
                    <td class="table__item">
                        <div class="checkout__image">
                            <img src="{{ asset('/images/1.jpg') }}" alt="">
                        </div>
                        <div class="checkout__name">
                            <h3>Lorem ipsum dolor sit amet</h3>
                            <button class="checkout__btn">Delete</button>
                        </div>
                    </td>

                    <td>$9886</td>
                    <td>
                        <div class="counter">
                            <input type="number" value="0" id="quantity" min="0">
                            <button class="checkout__btn">Update</button>
                        </div>
                    </td>
                    <td>$9876</td>
                </tr>
                <tr>
                    <td class="table__item">
                        <div class="checkout__image">
                            <img src="{{ asset('/images/1.jpg') }}" alt="">
                        </div>
                        <div class="checkout__name">
                            <h3>Lorem ipsum dolor sit amet</h3>
                            <button class="checkout__btn">Delete</button>
                        </div>
                    </td>

                    <td>$9886</td>
                    <td>
                        <div class="counter">
                            <input type="number" value="0" id="quantity" min="0">
                            <button class="checkout__btn">Update</button>
                        </div>
                    </td>
                    <td>$9876</td>
                </tr>
                <tr>
                    <td class="table__item">
                        <div class="checkout__image">
                            <img src="{{ asset('/images/1.jpg') }}" alt="">
                        </div>
                        <div class="checkout__name">
                            <h3>Lorem ipsum dolor sit amet</h3>
                            <button class="checkout__btn">Delete</button>
                        </div>
                    </td>

                    <td>$9886</td>
                    <td>
                        <div class="counter">
                            <input type="number" value="0" id="quantity" min="0">
                            <button class="checkout__btn">Update</button>
                        </div>
                    </td>
                    <td>$9876</td>
                </tr>

            </table>

            <div class="checkout__subtotaltable">
                <table class="subtotal">
                    <tr>
                        <th>Subtotal</th>
                        <td>$94905</td>

                    </tr>
                    <tr>
                        <th>Tax</th>
                        <td>$500</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td>$13594</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
