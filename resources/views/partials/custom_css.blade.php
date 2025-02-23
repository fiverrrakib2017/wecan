<style>

@import url('https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css');

*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  height: 100%;
}

body {
  font: 14px/1 'Open Sans', sans-serif;
  color: #555;
  background: #eee;
}

#tsum-tabs h1 {
  padding: 50px 0;
  font-weight: 400;
  text-align: center;
}

#tsum-tabs p {
  margin: 0 0 20px;
  line-height: 1.5;
}

#tsum-tabs main {
  min-width: 320px;
  max-width: 800px;
  padding: 50px;
  margin: 0 auto;
  background: #fff;
}

#tsum-tabs section {
  display: none;
  padding: 20px 0 0;
  border-top: 1px solid #ddd;
}

#tsum-tabs input {
  display: none;
}

#tsum-tabs label {
  display: inline-block;
  margin: 0 0 -1px;
  padding: 15px 25px;
  font-weight: 600;
  text-align: center;
  color: #bbb;
  border: 1px solid transparent;
}

#tsum-tabs label:before {
  font-family: fontawesome;
  font-weight: normal;
  margin-right: 10px;
}

#tsum-tabs label[for*='1']:before { content: '\f54f'; }
#tsum-tabs label[for*='2']:before { content: '\f54f'; }

#tsum-tabs label:hover {
  color: #888;
  cursor: pointer;
}

#tsum-tabs input:checked + label {
  color: #555;
  border: 1px solid #ddd;
  border-top: 2px solid #b83375;
  border-bottom: 1px solid #fff;
}

#tsum-tabs #tab1:checked ~ #content1,
#tsum-tabs #tab2:checked ~ #content2,
#tsum-tabs #tab3:checked ~ #content3,
#tsum-tabs #tab4:checked ~ #content4 {
  display: block;
}

@media screen and (max-width: 650px) {
  #tsum-tabs label {
    font-size: 0;
  }
  #tsum-tabs label:before {
    margin: 0;
    font-size: 18px;
  }
}

@media screen and (max-width: 400px) {
  #tsum-tabs label {
    padding: 15px;
  }
}
</style>
