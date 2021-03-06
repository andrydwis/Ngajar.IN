<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Invoice</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>

</head>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                    <h1>Ngajar.in</h1>
                                    <p>Thanks for joining us!! Keep spirit to study guys</p>
                                </td>

                                <td>
                                    Invoice #: {{ $order->order_id }}<br>
                                    Created: {{ now()->format('D, d-m-Y') }}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr class="information">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                    <b>Id Mentor</b><br>
                                    {{ $order->mentor->name }}
                                </td>

                                <td>
                                    <b>Id Client</b><br>
                                    {{ $order->client->name }}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr class="heading">
                    <td>
                        Details
                    </td>

                    <td>
                        #
                    </td>
                </tr>

                <tr class="item">
                    <td>
                        Day
                    </td>

                    <td>
                        {{$order->day}}
                    </td>
                </tr>

                <tr class="item">
                    <td>
                        Hour Start
                    </td>

                    <td>
                        {{$order->hour_start}}
                    </td>
                </tr>

                <tr class="item">
                    <td>
                        Hour End
                    </td>

                    <td>
                        {{$order->hour_end}}
                    </td>
                </tr>

                <tr class="item">
                    <td>
                        Duration
                    </td>

                    <td>
                        {{$order->duration}} minute
                    </td>
                </tr>

                <tr class="item last">
                    <td>
                        Fee
                    </td>

                    <td>
                        Rp. {{number_format($order->fee,2,",",".")}}
                    </td>
                </tr>

                <tr class="total">
                    <td></td>

                    <td>
                        Total: Rp. {{number_format($order->fee,2,",",".")}}
                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->


</body>

</html>