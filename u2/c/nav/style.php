<style> 
html, body {
     border: 0;
     padding: 0;
     margin: 0;
     height: 100%;
}
 body {
     background: white;
     font-size: 16px;
     background-color: #ffffff;
     font-family: Arial;
     font-size: 18px;
     padding: 0px;
}
 .textarea {
     width: 70%;
     height: 150px;
     padding: 12px 20px;
     box-sizing: border-box;
     box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.2);
     border: 2px solid #ccc;
     border-radius: 10px;
     background-color: #fff;
     resize: none;
}
 .container {
     align-items: center;
     background-color: #ffffff;
     padding: 10px 10px 10px 10px;
     border-radius: 0px;
}
 .row {
     display: -ms-flexbox;
    /* IE10 */
     display: flex;
     -ms-flex-wrap: wrap;
    /* IE10 */
     flex-wrap: wrap;
     margin: 0 -10px;
}
 .col-25 {
     -ms-flex: 25%;
    /* IE10 */
     flex: 25%;
     text-align:center;
}
 .col-10 {
     -ms-flex: 15%;
    /* IE10 */
     flex: 15%;
}
 .col-50 {
     -ms-flex: 50%;
    /* IE10 */
     flex: 50%;
}
 .col-75 {
     -ms-flex: 75%;
    /* IE10 */
     flex: 75%;
}
 .col-25, .col-50, .col-75 {
     padding: 0 5px;
}
.table-responsive {
     border-collapse: collapse;
     border-spacing: 0;
     width: 50%;
     box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.2);
     font-family: lato;
     position: relative;
     color: #333;
     border-radius: 10px;
}
.table-responsive-widgets {
     border-collapse: collapse;
     border-spacing: 0;
     width: 100%;
     box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.1);
     font-family: lato;
     position: relative;
     color: #333;
     border-radius: 7px;
}
.table-home {
     border-collapse: collapse;
     border-spacing: 0;
     width: 90%;
     box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
     font-family: lato;
     position: relative;
     color: #333;
     border-radius: 10px;
}
.table-home-widgets {
     border-collapse: collapse;
     border-spacing: 0;
     width: 30%;
     box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.1);
     font-family: lato;
     position: relative;
     color: #333;
     border-radius: 7px;
}
 .w3-bar{
     box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.2);
     border-radius: 4px;
}
 .w3-sidebar{
     box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
     border-radius: 3px;
     border: 3px;
}
 .w3-red{
     color: #ff3333;
}
 .table-responsive{
     -sm|-md|-lg|-xl 
}
 th, td {
     text-align: left;
     padding: 10px;
}
 th:first-child, td:first-child {
     text-align: center;
}
 tr:nth-child(even) {
     background-color:#ffffff 
}
 input[type=text] {
     width: 30%;
     margin-bottom: 20px;
     padding: 12px;
     border: 3px;
     border-radius: 1px;
     background: white;
     box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
     font-family: lato;
     position: relative;
     color: #333;
     border-radius: 7px;
}
 .btn {
     background-color: red;
     width: 20%;
     padding: 12px;
     height: 50px;
     font-family: 'Roboto', sans-serif;
     font-size: 24pxpx;
     text-transform: uppercase;
     letter-spacing: 2.5px;
     font-weight: 500;
     color: #fff;
     border: 3px;
     border-radius: 10px;
     box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
     transition: all 0.3s ease 0s;
     cursor: pointer;
     outline: none;
}
 .title{
     font-weight: bold;
     letter-spacing: 2.5px;
     padding: 6px;
     border-radius: 10px;
     box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.2);
     width: 40%;
     padding: 5px 15px;
     margin-top: 20px;
     margin-bottom: 10px;
}
.lable{
     font-weight: bold;
     letter-spacing: 2.5px;
     padding: 2px;
     border-radius: 10px;
     box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
     width: 20%;
     padding: 5px 15px;
     margin-top: 30px;
     margin-bottom: 10px;
}
 input[type=search] {
     width: 15%;
     margin-bottom: 5px;
     padding: 12px;
     border: 3px;
     border-radius: 1px;
     background: white;
     box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
     font-family: lato;
     position: relative;
     color: #333;
     border-radius: 7px;
     height: 50px;
}
 .btn-search {
     background-color: red;
     width: 10%;
     padding: 12px;
     height: 50px;
     font-family: 'Roboto', sans-serif;
     font-size: 15px;
     text-transform: uppercase;
     letter-spacing: 2.5px;
     font-weight: 500;
     color: #fff;
     border: 3px;
     border-radius: 10px;
     box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
     transition: all 0.3s ease 0s;
     cursor: pointer;
     outline: none;
     margin-bottom: 5px;
}
 h1,h2,h3,h4,h5,h6,h7,h8{
     font-weight: 100;
     letter-spacing: 2.5px;
     padding: 12px;
     border-radius: 10px;
     box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
     width: 60%;
     padding: 5px 15px;
     margin-top: 30px;
     margin-bottom: 30px;
}
 .multiselect-wrapper {
     width: 180px;
     display: inline-block;
     white-space: nowrap;
     font-size: 12px;
     font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
}
 .multiselect-wrapper .multiselect-input {
     width: 120px;
     padding-right: 50px;
}
 .multiselect-wrapper label {
     display: block;
     font-size: 12px;
     font-weight : 600;
}
 .multiselect-wrapper .multiselect-list {
     z-index: 1;
     position: absolute;
     display: none;
     background-color: white;
     border: 1px solid grey;
     border-bottom-left-radius: 2px;
     border-bottom-right-radius: 2px;
     margin-top: -2px;
}
 .multiselect-wrapper .multiselect-list.active {
     display: block;
}
 .multiselect-wrapper .multiselect-list > span {
     font-weight: bold;
}
 .multiselect-wrapper .multiselect-list .multiselect-checkbox {
     margin-right: 2px;
}
 .multiselect-wrapper .multiselect-list > span, .multiselect-wrapper .multiselect-list li {
     cursor: default;
}
 .multiselect-wrapper .multiselect-list {
     padding: 5px;
     min-width: 200px;
}
 .multiselect-wrapper ul {
     list-style: none;
     display: block;
     position: relative;
     padding: 0px;
     margin: 0px;
     max-height: 200px;
     overflow-y: auto;
     overflow-x: hidden;
}
 .multiselect-wrapper ul li {
     padding-right: 20px;
     display: block;
}
 .multiselect-wrapper ul li.active {
     background-color: rgb(0, 102, 255);
     color: white;
}
 .multiselect-wrapper ul li:hover {
     background-color: rgb(0, 102, 255);
     color: white;
}
 .multiselect-input-div {
     height: 34px;
}
 .multiselect-input-div input{
     border: 1px solid #ababab;
     background : #fff;
     margin: 5px 0 6px 0;
     padding: 5px;
     vertical-align:middle;
}
 .multiselect-count {
     position: relative;
     text-align: center;
     border-radius: 2px;
     behavior: url(/Content/Pie/pie.htc);
     background-color: lightblue;
     display: inline-block !important;
     padding: 2px 7px;
     left: -45px;
}
 .multiselect-dropdown-arrow {
     width: 0;
     height: 0;
     border-left: 5px solid transparent;
     border-right: 5px solid transparent;
     border-top: 5px solid black;
     position: absolute;
     line-height: 20px;
     text-align: center;
     display: inline-block !important;
     margin-top: 17px;
     margin-left: -42px;
}
<?PHP include('style-mini.php');