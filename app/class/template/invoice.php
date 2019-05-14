<body>
    <span class="preheader">This is an invoice for your purchase on {{ purchase_date }}. Please submit payment by {{ due_date }}</span>
    <table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center">
          <table class="email-content" width="100%" cellpadding="0" cellspacing="0">
            <tr>
              <td class="email-masthead">
                <a href="https://example.com" class="email-masthead_name">
        [Product Name]
      </a>
              </td>
            </tr>
            <!-- Email Body -->
            <tr>
              <td class="email-body" width="100%" cellpadding="0" cellspacing="0">
                <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0">
                  <!-- Body content -->
                  <tr>
                    <td class="content-cell">
                      <h1>Hi {{name}},</h1>
                      <p>Thanks for using [Product Name]. This is an invoice for your recent purchase.</p>
                      <table class="attributes" width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                          <td class="attributes_content">
                            <table width="100%" cellpadding="0" cellspacing="0">
                              <tr>
                                <td class="attributes_item"><strong>Amount Due:</strong> {{total}}</td>
                              </tr>
                              <tr>
                                <td class="attributes_item"><strong>Due By:</strong> {{due_date}}</td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <!-- Action -->
                      <table class="body-action" align="center" width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                          <td align="center">
                            <!-- Border based button
                       https://litmus.com/blog/a-guide-to-bulletproof-buttons-in-email-design -->
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="center">
                                  <table border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td>
                                        <a href="{{action_url}}" class="button button--green" target="_blank">Pay this Invoice</a>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <table class="purchase" width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                          <td>
                            <h3>{{invoice_id}}</h3></td>
                          <td>
                            <h3 class="align-right">{{date}}</h3></td>
                        </tr>
                        <tr>
                          <td colspan="2">
                            <table class="purchase_content" width="100%" cellpadding="0" cellspacing="0">
                              <tr>
                                <th class="purchase_heading">
                                  <p>Description</p>
                                </th>
                                <th class="purchase_heading">
                                  <p class="align-right">Amount</p>
                                </th>
                              </tr>
                              {{#each invoice_details}}
                              <tr>
                                <td width="80%" class="purchase_item">{{description}}</td>
                                <td class="align-right" width="20%" class="purchase_item">{{amount}}</td>
                              </tr>
                              {{/each}}
                              <tr>
                                <td width="80%" class="purchase_footer" valign="middle">
                                  <p class="purchase_total purchase_total--label">Total</p>
                                </td>
                                <td width="20%" class="purchase_footer" valign="middle">
                                  <p class="purchase_total">{{total}}</p>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <p>If you have any questions about this invoice, simply reply to this email or reach out to our <a href="{{support_url}}">support team</a> for help.</p>
                      <p>Cheers,
                        <br>The [Product Name] Team</p>
                      <!-- Sub copy -->
                      <table class="body-sub">
                        <tr>
                          <td>
                            <p class="sub">If you’re having trouble with the button above, copy and paste the URL below into your web browser.</p>
                            <p class="sub">{{action_url}}</p>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table class="email-footer" align="center" width="570" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="content-cell" align="center">
                      <p class="sub align-center">&copy; 2019 [Product Name]. All rights reserved.</p>
                      <p class="sub align-center">
                        [Company Name, LLC]
                        <br>1234 Street Rd.
                        <br>Suite 1234
                      </p>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>