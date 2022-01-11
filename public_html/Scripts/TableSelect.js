

class Product {

    //Input templates
    CreateDVD() {
        var divdvd = document.createElement('div')
        divdvd.id = "divDVD";
        divdvd.className = "form-group mx-sm-3 mb-4";
        document.getElementById('typeDiv').appendChild(divdvd);

        var labelDVD = document.createElement('label');
        labelDVD.innerHTML = "Size (MB):";
        labelDVD.htmlFor = "size";
        labelDVD.className = "col-sm-1 col-form-label";
        document.getElementById('divDVD').appendChild(labelDVD);

        var inputDVD = document.createElement("input");
        inputDVD.type = "text";
        inputDVD.id = "size";
        inputDVD.name = "size";
        document.getElementById('divDVD').appendChild(inputDVD);

        var smolValue = document.createElement("small");
        smolValue.id = "size-value"
        smolValue.innerHTML = "Size cannot be blank"
        smolValue.className = "d-none"
        document.getElementById('divDVD').appendChild(smolValue);

        var smolData = document.createElement("small");
        smolData.id = "size-data"
        smolData.innerHTML = "Size must be numeric"
        smolData.className = "d-none"
        document.getElementById('divDVD').appendChild(smolData);

        var para = document.createElement("small");
        para.className = "text-info mx-3";
        document.getElementById('typeDiv').appendChild(para);
        var t = document.createTextNode("Please Provide The Size of the DVD!");
        para.appendChild(t);
    }

    CreateFurniture() {
        var divh = document.createElement('div')
        divh.id = "divHeight";
        divh.className = "form-group mx-sm-3 mb-4";
        document.getElementById('typeDiv').appendChild(divh);

        var labelFur = document.createElement('label');
        labelFur.innerHTML = "Height (CM):";
        labelFur.htmlFor = "height";
        labelFur.className = "col-sm-1 col-form-label";
        document.getElementById('divHeight').appendChild(labelFur);

        var inputFur = document.createElement("input");
        inputFur.type = "text";
        inputFur.id = "height";
        inputFur.name = "height";
        document.getElementById('divHeight').appendChild(inputFur);

        var smolValue = document.createElement("small");
        smolValue.id = "height-value"
        smolValue.innerHTML = "Height cannot be blank"
        smolValue.className = "d-none"
        document.getElementById('divHeight').appendChild(smolValue);

        var smolData = document.createElement("small");
        smolData.id = "height-data"
        smolData.innerHTML = "Height must be numeric"
        smolData.className = "d-none"
        document.getElementById('divHeight').appendChild(smolData);


        var divw = document.createElement('div')
        divw.id = "divWidth";
        divw.className = "form-group mx-sm-3 mb-4";
        document.getElementById('typeDiv').appendChild(divw);

        var labelFur = document.createElement('label');
        labelFur.innerHTML = "Width (CM):";
        labelFur.htmlFor = "width";
        labelFur.className = "col-sm-1 col-form-label";
        document.getElementById('divWidth').appendChild(labelFur);

        var inputFur = document.createElement("input");
        inputFur.type = "text";
        inputFur.id = "width";
        inputFur.name = "width";
        document.getElementById('divWidth').appendChild(inputFur);

        var smolValue1 = document.createElement("small");
        smolValue1.id = "width-value"
        smolValue1.innerHTML = "Width cannot be blank"
        smolValue1.className = "d-none"
        document.getElementById('divWidth').appendChild(smolValue1);

        var smolData1 = document.createElement("small");
        smolData1.id = "width-data"
        smolData1.innerHTML = "Width must be numeric"
        smolData1.className = "d-none"
        document.getElementById('divWidth').appendChild(smolData1);



        var divL = document.createElement('div')
        divL.id = "divLength";
        divL.className = "form-group mx-sm-3 mb-4";
        document.getElementById('typeDiv').appendChild(divL);

        var labelFur = document.createElement('label');
        labelFur.innerHTML = "Length (CM):";
        labelFur.htmlFor = "length-small";
        labelFur.className = "col-sm-1 col-form-label";
        document.getElementById('divLength').appendChild(labelFur);

        var inputFur = document.createElement("input");
        inputFur.type = "text";
        inputFur.id = "length";
        inputFur.name = "length";
        document.getElementById('divLength').appendChild(inputFur);

        var smolValue2 = document.createElement("small");
        smolValue2.id = "length-value"
        smolValue2.innerHTML = "Length cannot be blank"
        smolValue2.className = "d-none"
        document.getElementById('divLength').appendChild(smolValue2);

        var smolData2 = document.createElement("small");
        smolData2.id = "length-data"
        smolData2.innerHTML = "Length must be numeric"
        smolData2.className = "d-none"
        document.getElementById('divLength').appendChild(smolData2);

        var para = document.createElement("small");
        para.className = "text-info mx-3";
        document.getElementById('typeDiv').appendChild(para);
        var t = document.createTextNode("Please Provide The H x W x L of the Furniture!");
        para.appendChild(t);
    }

    CreateBook() {
        var divl = document.createElement('div')
        divl.id = "divBook";
        divl.className = "form-group mx-sm-3 mb-4";
        document.getElementById('typeDiv').appendChild(divl);

        var labelBook = document.createElement('label');
        labelBook.innerHTML = "Weight (Kg):";
        labelBook.htmlFor = "weight";
        labelBook.className = "col-sm-1 col-form-label";
        document.getElementById('divBook').appendChild(labelBook);

        var inputBook = document.createElement("input");
        inputBook.type = "text";
        inputBook.id = "weight";
        inputBook.name = "weight";
        document.getElementById('divBook').appendChild(inputBook);

        var smolValue = document.createElement("small");
        smolValue.id = "weight-value"
        smolValue.innerHTML = "Weight cannot be blank"
        smolValue.className = "d-none"
        document.getElementById('divBook').appendChild(smolValue);

        var smolData = document.createElement("small");
        smolData.id = "weight-data"
        smolData.innerHTML = "Weight must be numeric"
        smolData.className = "d-none"
        document.getElementById('divBook').appendChild(smolData);

        var para = document.createElement("small");
        para.className = "text-info mx-3";
        document.getElementById('typeDiv').appendChild(para);
        var t = document.createTextNode("Please Provide The Weight of The Book!");
        para.appendChild(t);

    }
}

function TypeSelect() {

    var id = document.getElementById("productType");
    var type = id.value;
    var node = document.getElementById("typeDiv");

    //Deletes previous elements

    while (node.firstChild) {
        node.removeChild(node.lastChild);
    }

    //Initializes class

    if (type === "DVD") {
        let call = new Product();
        call.CreateDVD();
        return
    }

    if (type === "Furniture") {
        let call = new Product();
        call.CreateFurniture();
        return
    }

    if (type === "Book") {
        let call = new Product();
        call.CreateBook();
        return
    }
}