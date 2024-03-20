# application/controllers

Controllers are the interface of the application.
Everything starts by something activating a controller, f.ex. an http request.
A controller can accept 0 or more parameters.
A controller is responsible for validating the request, calling a service and responding to the requester.

The controller directory can be subdivided into several modules or components, grouping the interfaces into blocks.

A controller traditionally comprises one or more actions, however, it's encouraged to stop thinking about controller actions
and just let each endpoint be controlled by a single controller with a single responsibility.
