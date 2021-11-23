<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 3</title>
    {{-- <link rel="stylesheet" href="style.css" media="all" /> --}}
    <style>

/* @page {
      size: auto;
      odd-header-name: html_MyHeader1;
      odd-footer-name: html_MyFooter1;
    } */

    /* goto pg, find class 'chapter2', make its header & footer to be of tag name "MyHeaderPage" & "MyFooterPage" respectively */
    @page headerPgContent {
        odd-header-name: html_MyHeaderPage;
        odd-footer-name: html_MyFooterPage;
    }

    @page tocheader {
        odd-header-name: _blank;
        odd-footer-name: _blank;
    }
    
    /* goto pg, find class 'noheader', make its header & footer blank */
    @page noheader {
        odd-header-name: _blank;
        odd-footer-name: _blank;
    }

    /* div with class headerPgContent shld start with new page, extending headerPgContent above */
    div.headerPgContent {
        page-break-before: always;
        page: headerPgContent;
    }

    /* div with class noheader shld start with new page, extending noheader above */
    div.noheader {
        page-break-before: always;
        page: noheader;
    }
    /* div.toc {
        page-break-before: always;
        page: noheader;
    } */
</style>
   
  </head>
  <body>
    <body>
        
        <htmlpageheader name="MyHeaderPage">
            <div style="border-bottom: 1px solid #000000; font-weight: bold;  font-size: 10pt;">My document2</div>
        </htmlpageheader>

        <htmlpagefooter name="MyFooterPage">
            <table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;">
                <tr>
                    <td width="33%"><span style="font-weight: bold; font-style: italic;">My document</span></td>
                    <td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>
                    <td width="33%" style="text-align: right; ">{DATE j-m-Y}</td>
                </tr>
            </table>
        </htmlpagefooter>
    
        <div class="noheader">
            <h4>DESCRIPTION</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste, qui, quo magni natus nemo culpa placeat deserunt aliquam sequi ab architecto officia quae temporibus odit sit, ex iusto. Eveniet, temporibus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat exercitationem accusamus doloremque, temporibus fugit repellat odio repellendus error magnam atque nemo quas obcaecati officiis asperiores iure commodi fuga, molestias tempora.</p>
            
        </div>

            
                {{-- immediately after the 'toc' break page --}}
                <div class="toc">
                <tocpagebreak toc-odd-header-name="tocheader" toc-prehtml="&lt;h4&gt;Table of Contents&lt;/h4&gt;">
                </div>
            
                <div class="headerPgContent">  
                    <tocentry content="1. chapter 1" />
                    <div>page content of chapter 1</div>
                </div>
            

           
                <div class="headerPgContent">
                    <tocentry content="2. chapter 2" />
                    <div>page content of chapter 2</div>
                </div>
            
                    
        <div class="headerPgContent">Text of Chapter 2</div>
        
    </body>

 
</html>