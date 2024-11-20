<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="container">
        <a href="{{asset('menu')}}" class="logo">
          <img src="{{asset('images/logo.png')}}" height="42px" alt="quette logo" />
        </a>
      </div>
    </header>
    <!-- Order Process -->
    <section>
      <div class="container">
        <div class="order-process" id="order_process">
          <div class="icon-box cart-items-nav disabled">
            <span class="material-symbols-rounded"> shopping_cart </span>
            <p>Shopping Cart</p>
          </div>
          <div class="line"></div>
          <div class="icon-box customer-nav disabled">
            <span class="material-symbols-rounded"> person </span>
            <p>Customer Information</p>
          </div>
          <div class="line disabled"></div>
          <div class="icon-box payment-nav disabled">
            <span class="material-symbols-rounded"> credit_card </span>
            <p>Payment Information</p>
          </div>
          <div class="line disabled"></div>
          <div class="icon-box summary-nav disabled">
            <span class="material-symbols-rounded"> receipt </span>
            <p>Order Summary</p>
          </div>
          <div class="line disabled"></div>
          <div class="icon-box confirmation-nav disabled">
            <span class="material-symbols-rounded"> check_circle </span>
            <p>Confirmation</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Cart Items -->
    <section id="cart_items" class="cart-items">
      <div class="container">
        <div class="section-title">
          <h2 class="c-heading w-medium">Your Shopping Cart</h2>
          <div class="line"></div>
        </div>
        <table>
          <thead>
            <tr>
              <th>Image</th>
              <th>Item</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Subtotal</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="item-banner">
                  <img
                    src="{{asset('images/Moroccan-Orange-and-Chicken-Tagine.jpg')}}"
                    alt="Chicken Pastilla"
                    class="image-cover"
                  />
                </div>
              </td>
              <td>Chicken Pastilla</td>
              <td>
                <input type="number" class="quantity-input" value="1" min="1" />
              </td>
              <td>$15.99</td>
              <td>$15.99</td>
              <td>
                <span
                  class="btn btn-smooth c-body-light"
                  style="background-color: red"
                  onclick="removeItem(this)"
                  >Remove</span
                >
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="4">Subtotal</th>
              <td colspan="2">$35.99</td>
            </tr>
            <tr></tr>
          </tfoot>
        </table>
        <a id="cart_submint_btn" class="btn btn-smooth btn-primary"
          >Proceed to Checkout</a
        >
      </div>
    </section>
    <!-- Costomer Information -->
    <section id="costomer-form" class="costomer">
      <div class="container">
        <div class="section-title">
          <h2 class="c-heading w-medium">Delivery Information</h2>
          <div class="line"></div>
        </div>
        <form action="" method="post">
          <div class="input-fuild">
            <label for="name" class="xs c-body w-semibold">Full Name</label>
            <input
              class="xs c-body"
              type="text"
              placeholder="Enter your fullName"
              name="name"
              id="name"
            />
          </div>
          <div class="input-fuild">
            <label for="email" class="xs c-body w-semibold"
              >Email Address</label
            >
            <input
              class="xs c-body"
              type="text"
              placeholder="Enter Email Address"
              name="email"
              id="email"
            />
          </div>
          <div class="input-fuild">
            <label for="phone" class="xs w-semibold c-body">Phone Number</label>
            <input
              class="xs c-body"
              type="text"
              placeholder="Enter Your Phone numebr"
              name="phone"
              id="phone"
            />
          </div>
          <div class="input-fuild">
            <label for="address" class="xs w-semibold c-body"
              >Delivery Address</label
            >
            <input
              class="xs c-body"
              type="text"
              placeholder="Enter your address"
              name="address"
              id="address"
            />
          </div>
          <div class="input-fuild">
            <label for="street" class="xs w-semibold c-body">Street</label>
            <input
              class="xs c-body"
              type="text"
              placeholder="Enter Your Street"
              name="street"
              id="street"
            />
          </div>
          <div class="input-fuild">
            <label for="city" class="xs w-semibold c-body">City</label>
            <input
              class="xs c-body"
              type="text"
              placeholder="Enter Your City"
              name="city"
              id="city"
            />
          </div>
          <div class="input-fuild">
            <label for="postal_code" class="xs w-semibold c-body"
              >Postal Code</label
            >
            <input
              class="xs c-body"
              type="number"
              min="1"
              name="postal_code"
              id="postal_code"
            />
          </div>
          <div class="input-fuild">
            <label for="instructions" class="xs w-semibold c-body"
              >Special Instructions</label
            >
            <textarea
              name="instructions"
              id="instructions"
              cols="30"
              rows="5"
            ></textarea>
          </div>
          <input
            id="costomer_form_submit"
            type="button"
            value="submit"
            class="btn btn-shadow-md btn-primary btn-smooth"
          />
        </form>
      </div>
    </section>
    <!-- Payment Information -->
    <section id="payment_form" class="payment">
      <div class="container">
        <div class="section-title">
          <h2 class="c-heading w-medium">Payment Information</h2>
          <div class="line"></div>
        </div>
        <form action="" method="post" class="payment-info">
          <div class="input-fuild">
            <label for="cardNumber" class="xs c-body w-semibold"
              >Card Number</label
            >
            <input
              class="xs c-body"
              type="tel"
              placeholder="Enter your card number"
              name="cardNumber"
              id="cardNumber"
              pattern="[0-9\s]{13,19}"
              maxlength="19"
              required
            />
          </div>
          <div class="input-fuild">
            <label for="expiryDate" class="xs c-body w-semibold"
              >Expiry Date</label
            >
            <input
              class="xs c-body"
              type="tel"
              placeholder="MM/YY"
              name="expiryDate"
              id="expiryDate"
              pattern="(0[1-9]|1[0-2])\/[0-9]{2}"
              required
            />
          </div>
          <div class="input-fuild">
            <label for="cvv" class="xs c-body w-semibold">CVV</label>
            <input
              class="xs c-body"
              type="number"
              placeholder="Enter CVV"
              name="cvv"
              id="cvv"
              maxlength="3"
              required
            />
          </div>
          <div class="input-fuild">
            <label for="billingAddress" class="xs c-body w-semibold"
              >Billing Address</label
            >
            <input
              class="xs c-body"
              type="text"
              placeholder="Enter your billing address"
              name="billingAddress"
              id="billingAddress"
              required
            />
          </div>
          <input
            id="payment_form_submit"
            type="button"
            value="Place Order"
            class="btn btn-shadow-md btn-primary btn-smooth"
          />
        </form>
      </div>
    </section>
    <!-- Order Summary -->
    <section id="order_summary" class="cart-items order-summary">
      <div class="container">
        <div class="section-title">
          <h2 class="c-heading w-medium">Order Summary</h2>
          <div class="line"></div>
        </div>
        <table>
          <thead>
            <tr>
              <th>Image</th>
              <th>Item</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Subtotal</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="item-banner">
                  <img
                    src="{{asset('images/Moroccan-Orange-and-Chicken-Tagine.jpg')}}"
                    alt="Chicken Pastilla"
                    class="image-cover"
                  />
                </div>
              </td>
              <td>Chicken Pastilla</td>
              <td>x1</td>
              <td>$15.99</td>
              <td>$31.98</td>
              <td>
                <span
                  class="btn btn-smooth c-body-light"
                  style="background-color: red"
                  onclick="removeItem(this)"
                  >Remove</span
                >
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="5">Subtotal</th>
              <td>$35.99</td>
            </tr>
            <tr>
              <th colspan="5">Delivey Fee</th>
              <td>$5.99</td>
            </tr>
            <tr>
              <th colspan="5">Total</th>
              <td>$43.99</td>
            </tr>
            <tr></tr>
          </tfoot>
        </table>
        <a href="#" id="summary_btn" class="btn btn-smooth btn-primary"
          >place-order</a
        >
      </div>
    </section>
    <section id="confirmation" class="confiramtion">
      <div class="container">
        <div class="icon-box">
          <span class="material-symbols-rounded"> task_alt </span>
        </div>
        <h1 class="c-heading w-medium">Thank You</h1>
        <p class="md c-body-soft">
          Your satisfaction is our priority. We are thrilled to have you as a
          valued customer and can’t wait for you to enjoy your meal. If you have
          any questions or need assistance, feel free to reach out to our
          customer support. Thank you for choosing us! This subtext adds a
          personal touch, emphasizes customer satisfaction, and provides
          reassurance that support is available if needed. If you need further
          customization, let me know!
        </p>
        <a href="{{asset('menu')}}" class="btn btn-primary-outline btn-smooth"
          >Costomer Service</a
        >
        <a href="{{asset('menu')}}" class="btn btn-primary btn-smooth"
          >Back to Home</a
        >
      </div>
    </section>
    <script src="{{asset('js/main.js')}}"></script>

  </body>
</html>
 