# dijkstra-algorithm
it's a simple implementation for dijkstra's alogrithm in PHP
# explaination 
in this example i assumed that we have graph like this :

<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<!-- Created with Inkscape (http://www.inkscape.org/) -->

<svg
   width="360"
   height="360"
   viewBox="0 0 360 360"
   version="1.1"
   id="svg5"
   inkscape:version="1.1.1 (3bf5ae0d25, 2021-09-20)"
   sodipodi:docname="dijksrta's graph.svg"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:svg="http://www.w3.org/2000/svg">
  <sodipodi:namedview
     id="namedview7"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageshadow="2"
     inkscape:pageopacity="0.0"
     inkscape:pagecheckerboard="0"
     inkscape:document-units="px"
     showgrid="false"
     inkscape:zoom="0.788866"
     inkscape:cx="597.6934"
     inkscape:cy="409.4485"
     inkscape:window-width="1920"
     inkscape:window-height="1058"
     inkscape:window-x="-8"
     inkscape:window-y="-8"
     inkscape:window-maximized="1"
     inkscape:current-layer="layer1" />
  <defs
     id="defs2" />
  <g
     inkscape:label="Layer 1"
     inkscape:groupmode="layer"
     id="layer1">
    <circle
       style="fill:#00ff00;fill-rule:evenodd"
       id="path1032"
       cx="785.21008"
       cy="458.93558"
       r="34.061626" />
    <circle
       style="fill:#00ff00;fill-rule:evenodd"
       id="path1032-19"
       cx="1143.7535"
       cy="467.89917"
       r="34.061626" />
    <circle
       style="fill:#ff0000;fill-rule:evenodd"
       id="path1032-1"
       cx="962.68909"
       cy="602.35291"
       r="34.061626" />
    <circle
       style="fill:#ff0000;fill-rule:evenodd"
       id="path1032-1-6"
       cx="960.89636"
       cy="315.51822"
       r="34.061626" />
    <path
       style="fill:none;stroke:#000000;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 806.22057,482.33794 134.3701,106.48196 46.26895,0.63382 136.27158,-109.65107 1.2676,-27.88813 L 979.25376,318.17824 H 942.49213 L 802.41765,439.87192 Z"
       id="path6738" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.752925px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 971.64308,588.90325 -12.48024,-272.076"
       id="path6740" />
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:40px;line-height:1.25;font-family:sans-serif;fill:#000000;fill-opacity:1;stroke:none"
       x="838.54547"
       y="555.86121"
       id="text9263"><tspan
         sodipodi:role="line"
         id="tspan9261"
         x="838.54547"
         y="555.86121">2</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:40px;line-height:1.25;font-family:sans-serif;fill:#000000;fill-opacity:1;stroke:none"
       x="848.68658"
       y="373.32068"
       id="text13359"><tspan
         sodipodi:role="line"
         id="tspan13357"
         x="848.68658"
         y="373.32068">6</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:40px;line-height:1.25;font-family:sans-serif;fill:#000000;fill-opacity:1;stroke:none"
       x="972.91559"
       y="451.2807"
       id="text15133"><tspan
         sodipodi:role="line"
         id="tspan15131"
         x="972.91559"
         y="451.2807">3</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:40px;line-height:1.25;font-family:sans-serif;fill:#000000;fill-opacity:1;stroke:none"
       x="1061.6505"
       y="384.72946"
       id="text16181"><tspan
         sodipodi:role="line"
         id="tspan16179"
         x="1061.6505"
         y="384.72946">1</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:40px;line-height:1.25;font-family:sans-serif;fill:#000000;fill-opacity:1;stroke:none"
       x="1054.6785"
       y="563.46704"
       id="text19353"><tspan
         sodipodi:role="line"
         id="tspan19351"
         x="1054.6785"
         y="563.46704">5</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:40px;line-height:1.25;font-family:sans-serif;fill:#000000;fill-opacity:1;stroke:none"
       x="1184.6118"
       y="478.535"
       id="text21315"><tspan
         sodipodi:role="line"
         id="tspan21313"
         x="1184.6118"
         y="478.535">fin</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:40px;line-height:1.25;font-family:sans-serif;fill:#000000;fill-opacity:1;stroke:none"
       x="652.20203"
       y="474.09827"
       id="text22507"><tspan
         sodipodi:role="line"
         id="tspan22505"
         x="652.20203"
         y="474.09827">start</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:40px;line-height:1.25;font-family:sans-serif;fill:#000000;fill-opacity:1;stroke:none"
       x="946.29504"
       y="275.07843"
       id="text24635"><tspan
         sodipodi:role="line"
         id="tspan24633"
         x="946.29504"
         y="275.07843">a</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:40px;line-height:1.25;font-family:sans-serif;fill:#000000;fill-opacity:1;stroke:none"
       x="958.33765"
       y="675.01953"
       id="text25959"><tspan
         sodipodi:role="line"
         id="tspan25957"
         x="958.33765"
         y="675.01953">b</tspan></text>
  </g>
</svg>

and i want to move from the start to the end in the shortest time,
so i have the time i will consume to move from the start to b node will be 2sec, from the start to the a is 6sec and so on like in the graph
so i used dijkstra's algorithm to solve it