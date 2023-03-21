// Adding subfields after choosing the items by switcher
$(document).ready(function () {
  const products = {
    "1": {
      html: '<div class="row mb-2"><label for="size" class="col-sm-2">Size (MB):</label><div class="col-sm-4"><input id="size" type="text" class="form-control" name="size" required></div></div>',
      description: 'Please, provide the size of the DVD-disk in MB.'
    },
    "2": {
      html: '<div class="row mb-2"><label for="weight" class="col-sm-2">Weight (Kg):</label><div class="col-sm-4"><input id="weight" type="text" class="form-control" name="weight" required></div></div>',
      description: 'Please, provide the weight of the Book in Kg.'
    },
    "3": {
      html: '<div class="row mb-2"><label for="height" class="col-sm-2">Height (Cm):</label><div class="col-sm-4"><input id="height" type="text" class="form-control" name="height" required></div></div>' +
        '<div class="row mb-2"><label for="width" class="col-sm-2">Width (Cm):</label><div class="col-sm-4"><input id="width" type="text" class="form-control" name="width" required></div></div>' +
        '<div class="row mb-2"><label for="length" class="col-sm-2">Length (Cm):</label><div class="col-sm-4"><input id="length" type="text" class="form-control" name="length" required></div></div>',
      description: 'Please, provide the dimensions of the furniture in H x W x L.'
    }
  };

  $("#productType").change(function () {
    var type = $(this).val();
    var product = products[type];

    if (product) {
      $("#new-field").html(product.html);
      $("#description").html(product.description);
    }
  });
});









