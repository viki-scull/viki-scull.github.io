+++
date = '2025-03-26T20:38:22+09:00'
draft = false
title = 'Knights in Tight Spaces'
company = 'Created at Ground Shatter'
subtitle = 'Procedual Map Generation'
technology = 'Made in Unity'
header_image = '/images/pic1.jpg'
bgColour = '#00b894'
textColour = '#2d3436'

+++

{{< block class="twoThirds portfolio" >}}
A procedurally generated map for the deck-building Roguelike, Knights in Tight Spaces (developed by Ground Shatter, published by Raw Fury).

Because each run is uniquely generated, we needed a map to be uniquely generated. Here is a brief overview of how that was achieved in Unity, using shaders and VFX Graph.

If you want to generate your own landmasses, I suggest watching Sebastian Lague's Procedural Landmass Generation series on YouTube, because that helped me A LOT
{{< /block >}}

{{< block class="portfolioPaddingSmall" >}}{{< /block >}}

{{< block class="fullWidth" >}}
![alt](../imgs/01.png "portfolioImg")
{{< /block >}}

{{< block class="fullWidth" >}}
![alt](../imgs/02.png "portfolioImg")
{{< /block >}}


{{< block class="twoThirds" >}}
![alt](../imgs/03.png "portfolioImg")
{{< /block >}}

{{< block class="oneThird" >}}
I used a generated cloud island texture, with step nodes to create the shape of the land. 

The interactive map is a whole lot of cells, hidden underneath the visual map and within the code I could use this texture to dictate which cells were land and water
{{< /block >}}



{{< block class="oneThird" >}}
![alt](../imgs/04.png "portfolioImg")
{{< /block >}}

{{< block class="oneThird" >}}
The trees and villages are made with VFX graph. I found random locations on the map and drew little clusters of dots in RGB channels of a texture.

This was used as a mask within VFX graph to say what sprites should spawn where.
{{< /block >}}

<!-->

{{< block class="twoThirds" >}}
![alt](../imgs/05.png "portfolioImg")
{{< /block >}}

{{< block class="oneThird" >}}
I sampled the texture and moved it slightly in four directions, getting the difference between them all for the outline.
{{< /block >}}

{{< block class="twoThirds" >}}
![alt](../imgs/06.png "portfolioImg")
{{< /block >}}

{{< block class="oneThird" >}}
The dotted lines are LineRenderers that follow a group of cells under the map, scaled up. They have some random jiggle on them to make them interesting and of course they use the same cloud texture as a mask to hide them under the water
{{< /block >}}