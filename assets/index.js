const externalHostname = "geoff.sowrey.org"

const redirectMap = new Map([
  ["/1989/06", "https://" + externalHostname + "/archives#1989"],
  ["/1989/07", "https://" + externalHostname + "/archives#1989"],
  ["/1989/07/03/behind-iron-curtain-kiev-night-train", "https://" + externalHostname + "/1989/1989-07-03-behind-iron-curtain-trip-soviet-union-kiev-night-train"],
])

async function handleRequest(request) {
  const requestURL = new URL(request.url)
  const path = requestURL.pathname.split("/redirect")[1]
  const location = redirectMap.get(path)
  if (location) {
    return Response.redirect(location, 301)
  }
  // If request not in map, return the original request
  return fetch(request)
}

addEventListener("fetch", async event => {
  event.respondWith(handleRequest(event.request))
})

