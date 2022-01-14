function renderProducts(list) {
    let html = "";

    if (list == null) return "";

    // let i = 1;

    list.forEach(product => {
        console.log(product);
        html += `
<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
          <div class="row">
          <div class="col-md-4 product-men mt-md-0 mt-5">
          <div class="men-pro-item simpleCart_shelfItem">
          <div class="men-thumb-item text-center">
          <img src="${product.image}" alt="" width="150px" height="200px">
          <div class="men-cart-pro">
          <div class="inner-men-cart-pro">
          <a href="/san-pham/${product.product_id}-${product.name}.html" class="link-product-add-cart">Quick View</a>
          </div>
          </div>
          <span class="product-new-top">New</span>
          </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="/san-pham/${product.product_id}-${product.name}.html">${product.name}</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span
                                                            class="item_price">${product.DonGia.toLocaleString()+' VNĐ'}</span>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                            </div>
                            </div>
        `;
    });
    return html;
}


function Search(idInput, url, idNullFeedback, idTable, renderFunc) {
    const input = document.getElementById(idInput);
    const nullFeedBack = document.getElementById(idNullFeedback);
    const table = document.getElementById(idTable);

    if (input == null) return;

    input.onkeyup = function () {
        let keyword = this.value.trim();

        setTimeout(() => {
            let text = this.value.trim();
            if (text === keyword) {
                $.ajax({
                    type: 'post',
                    datatype: 'JSON',
                    data: {keyword},
                    url: url,
                    success: function (result) {
                        table.innerHTML = renderFunc(result.list);
                        nullFeedBack.innerText = result.message;
                    }
                })
            }
        }, 200);
    }
}

Search('keyword', '/san-pham/search', 'products-null', 'product-table', renderProducts);
