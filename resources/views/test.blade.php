<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 3</title>
    {{-- <link rel="stylesheet" href="style.css" media="all" /> --}}
    <style>

        @page {
            header: page-header;
            footer: page-footer;
        }
                    
        @font-face {
            font-family: Junge;
            src: url(Junge-Regular.ttf);
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #001028;
            text-decoration: none;
        }

        body {
            font-family: Junge;
            position: relative;
            /* width: 21cm;   */
            height: 29.7cm; 
            margin: 0 auto; 
            color: #001028;
            background: #FFFFFF; 
            font-size: 12px; 
        }

        .arrow {
            margin-bottom: 4px;
        }

        .arrow.back {
            text-align: right;
        }

        .inner-arrow {
            padding-right: 10px;
            height: 30px;
            display: inline-block;
            background-color: rgb(233, 125, 49);
            text-align: center;

            line-height: 30px;
            vertical-align: middle;
        }

        .arrow.back .inner-arrow {
            background-color: rgb(233, 217, 49);
            padding-right: 0;
            padding-left: 10px;
        }

        .arrow:before,
        .arrow:after {
            content:'';
            display: inline-block;
            width: 0; height: 0;
            border: 15px solid transparent;
            vertical-align: middle;
        }

        .arrow:before {
            border-top-color: rgb(233, 125, 49);
            border-bottom-color: rgb(233, 125, 49);
            border-right-color: rgb(233, 125, 49);
        }

        .arrow.back:before {
            border-top-color: transparent;
            border-bottom-color: transparent;
            border-right-color: rgb(233, 217, 49);
            border-left-color: transparent;
        }

        .arrow:after {
            border-left-color: rgb(233, 125, 49);
        }

        .arrow.back:after {
            border-left-color: rgb(233, 217, 49);
            border-top-color: rgb(233, 217, 49);
            border-bottom-color: rgb(233, 217, 49);
            border-right-color: transparent;
        }

        .arrow span { 
            display: inline-block;
            width: 80px; 
            margin-right: 20px;
            text-align: right; 
        }

        .arrow.back span { 
            margin-right: 0;
            margin-left: 20px;
            text-align: left; 
        }

        h1 {
            color: #5D6975;
            font-family: Junge;
            font-size: 1.0em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            border-top: 1px solid #5D6975;
            border-bottom: 1px solid #5D6975;
            margin: 0 0 2em 0;
        }

        h1 small { 
            /* font-size: 0.45em; */
            font-size: 0.5em;
            /* line-height: 1.5em; */
            float: left;
        } 

        h1 small:last-child { 
            float: right;
        } 

        #project { 
            float: left; 
        }

        #company { 
            float: right; 
        }

        #details {
            margin-bottom: 30px;
        }

        footer {
            color: #5D6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #C1CED9;
            padding: 8px 0;
            text-align: center;
        }

    </style>
  </head>
  <body>
    <htmlpageheader name="page-header">
        {{-- Your Header Content {PAGENO} --}}
        <div style="text-align: right;">Your Header Content</div>
    </htmlpageheader>
    
    <main>
      {{-- <table>
        <thead>
          <tr>
            <th class="service">SERVICE</th>
            <th class="desc">DESCRIPTION</th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">Design</td>
            <td class="desc">Creating a recognizable design solution based on the company's existing visual identity</td>
            <td class="unit">$40.00</td>
            <td class="qty">26</td>
            <td class="total">$1,040.00</td>
          </tr>
          <tr>
            <td class="service">Development</td>
            <td class="desc">Developing a Content Management System-based Website</td>
            <td class="unit">$40.00</td>
            <td class="qty">80</td>
            <td class="total">$3,200.00</td>
          </tr>
          <tr>
            <td class="service">SEO</td>
            <td class="desc">Optimize the site for search engines (SEO)</td>
            <td class="unit">$40.00</td>
            <td class="qty">20</td>
            <td class="total">$800.00</td>
          </tr>
          <tr>
            <td class="service">Training</td>
            <td class="desc">Initial training sessions for staff responsible for uploading web content</td>
            <td class="unit">$40.00</td>
            <td class="qty">4</td>
            <td class="total">$160.00</td>
          </tr>
          <tr>
            <td colspan="4" class="sub">SUBTOTAL</td>
            <td class="sub total">$5,200.00</td>
          </tr>
          <tr>
            <td colspan="4">TAX 25%</td>
            <td class="total">$1,300.00</td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">$6,500.00</td>
          </tr>
        </tbody>
      </table> --}}
      <div style="text-align: justify;">
        <p style="font-size: 1.0em;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic praesentium possimus consequatur. Recusandae molestias necessitatibus ex dolorum nostrum asperiores. Optio omnis accusamus iure quam aliquam quisquam porro tempora aut dolore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero optio sed facere autem vitae obcaecati deserunt, praesentium exercitationem cum voluptate sint molestiae. Laudantium, cupiditate. Eveniet praesentium fuga temporibus officia enim?Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos cumque cum minus voluptatibus saepe facere delectus esse repellendus dolor autem! At libero vel fugiat, reprehenderit quas recusandae nisi praesentium quibusdam!
        </p>
        <p style="font-size: 1.0em;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic praesentium possimus consequatur. Recusandae molestias necessitatibus ex dolorum nostrum asperiores. Optio omnis accusamus iure quam aliquam quisquam porro tempora aut dolore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero optio sed facere autem vitae obcaecati deserunt, praesentium exercitationem cum voluptate sint molestiae. Laudantium, cupiditate. Eveniet praesentium fuga temporibus officia enim?Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos cumque cum minus voluptatibus saepe facere delectus esse repellendus dolor autem! At libero vel fugiat, reprehenderit quas recusandae nisi praesentium quibusdam!
        </p>
        <p style="font-size: 1.0em;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic praesentium possimus consequatur. Recusandae molestias necessitatibus ex dolorum nostrum asperiores. Optio omnis accusamus iure quam aliquam quisquam porro tempora aut dolore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero optio sed facere autem vitae obcaecati deserunt, praesentium exercitationem cum voluptate sint molestiae. Laudantium, cupiditate. Eveniet praesentium fuga temporibus officia enim?Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos cumque cum minus voluptatibus saepe facere delectus esse repellendus dolor autem! At libero vel fugiat, reprehenderit quas recusandae nisi praesentium quibusdam!
        </p>
        <p style="font-size: 1.0em;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic praesentium possimus consequatur. Recusandae molestias necessitatibus ex dolorum nostrum asperiores. Optio omnis accusamus iure quam aliquam quisquam porro tempora aut dolore?
        </p>
        <p style="font-size: 1.0em;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic praesentium possimus consequatur. Recusandae molestias necessitatibus ex dolorum nostrum asperiores. Optio omnis accusamus iure quam aliquam quisquam porro tempora aut dolore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero optio sed facere autem vitae obcaecati deserunt, praesentium exercitationem cum voluptate sint molestiae. Laudantium, cupiditate. Eveniet praesentium fuga temporibus officia enim?Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos cumque cum minus voluptatibus saepe facere delectus esse repellendus dolor autem! At libero vel fugiat, reprehenderit quas recusandae nisi praesentium quibusdam!
        </p>
        <p style="font-size: 1.0em;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic praesentium possimus consequatur. Recusandae molestias necessitatibus ex dolorum nostrum asperiores. Optio omnis accusamus iure quam aliquam quisquam porro tempora aut dolore?
        </p>
        <p style="font-size: 1.0em;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic praesentium possimus consequatur. Recusandae molestias necessitatibus ex dolorum nostrum asperiores. Optio omnis accusamus iure quam aliquam quisquam porro tempora aut dolore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero optio sed facere autem vitae obcaecati deserunt, praesentium exercitationem cum voluptate sint molestiae. Laudantium, cupiditate. Eveniet praesentium fuga temporibus officia enim?Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos cumque cum minus voluptatibus saepe facere delectus esse repellendus dolor autem! At libero vel fugiat, reprehenderit quas recusandae nisi praesentium quibusdam!
        </p>
        <p style="font-size: 1.0em;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic praesentium possimus consequatur. Recusandae molestias necessitatibus ex dolorum nostrum asperiores. Optio omnis accusamus iure quam aliquam quisquam porro tempora aut dolore?
        </p>
        <p style="font-size: 1.0em;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic praesentium possimus consequatur. Recusandae molestias necessitatibus ex dolorum nostrum asperiores. Optio omnis accusamus iure quam aliquam quisquam porro tempora aut dolore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero optio sed facere autem vitae obcaecati deserunt, praesentium exercitationem cum voluptate sint molestiae. Laudantium, cupiditate. Eveniet praesentium fuga temporibus officia enim?Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos cumque cum minus voluptatibus saepe facere delectus esse repellendus dolor autem! At libero vel fugiat, reprehenderit quas recusandae nisi praesentium quibusdam!
        </p>
        <p style="font-size: 1.0em;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic praesentium possimus consequatur. Recusandae molestias necessitatibus ex dolorum nostrum asperiores. Optio omnis accusamus iure quam aliquam quisquam porro tempora aut dolore?
        </p>
        <p style="font-size: 1.0em;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic praesentium possimus consequatur. Recusandae molestias necessitatibus ex dolorum nostrum asperiores. Optio omnis accusamus iure quam aliquam quisquam porro tempora aut dolore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero optio sed facere autem vitae obcaecati deserunt, praesentium exercitationem cum voluptate sint molestiae. Laudantium, cupiditate. Eveniet praesentium fuga temporibus officia enim?Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos cumque cum minus voluptatibus saepe facere delectus esse repellendus dolor autem! At libero vel fugiat, reprehenderit quas recusandae nisi praesentium quibusdam!
        </p>
        <p style="font-size: 1.0em;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic praesentium possimus consequatur. Recusandae molestias necessitatibus ex dolorum nostrum asperiores. Optio omnis accusamus iure quam aliquam quisquam porro tempora aut dolore?
        </p>
        <p style="font-size: 1.0em;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic praesentium possimus consequatur. Recusandae molestias necessitatibus ex dolorum nostrum asperiores. Optio omnis accusamus iure quam aliquam quisquam porro tempora aut dolore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero optio sed facere autem vitae obcaecati deserunt, praesentium exercitationem cum voluptate sint molestiae. Laudantium, cupiditate. Eveniet praesentium fuga temporibus officia enim?Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos cumque cum minus voluptatibus saepe facere delectus esse repellendus dolor autem! At libero vel fugiat, reprehenderit quas recusandae nisi praesentium quibusdam!
        </p>
        <p style="font-size: 1.0em;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic praesentium possimus consequatur. Recusandae molestias necessitatibus ex dolorum nostrum asperiores. Optio omnis accusamus iure quam aliquam quisquam porro tempora aut dolore?
        </p>
    </div>
        
        
        
        
    </main>
    <htmlpagefooter name="page-footer">
        Your Footer Content
    </htmlpagefooter>
  </body>

 
</html>