var restify = require('restify');
var builder = require('botbuilder');

//=========================================================
// Bot Setup
//=========================================================

// Setup Restify Server
var server = restify.createServer();
server.listen(process.env.port || process.env.PORT || 3978, function () {
   console.log('%s listening to %s', server.name, server.url);
});

// Create chat bot
var connector = new builder.ChatConnector({
    appId: process.env.MICROSOFT_APP_ID,
    appPassword: process.env.MICROSOFT_APP_PASSWORD
});
var bot = new builder.UniversalBot(connector);
server.post('/api/messages', connector.listen());


var model = 'https://westus.api.cognitive.microsoft.com/luis/v2.0/apps/d6b52a07-38e5-45a8-9027-54b5ff7892a7?subscription-key=958857f9b4e04048aaaae7d4cfde05e5&verbose=true';
var recognizer = new builder.LuisRecognizer(model);
var dialog = new builder.IntentDialog({ recognizers: [recognizer] });
bot.dialog('/', dialog);

//=========================================================
// Bots Dialogs
//=========================================================


dialog.matches('definition_greet', [
    function (session, args, next) {
        if (!session.userData.name) {
            session.beginDialog('/profile');
        } else {
            next();
        }
    },
    function (session, results) {
        session.send('Hello %s! How can I help you today', session.userData.name);
    }
]);

bot.dialog('/profile', [
    function (session) {
        builder.Prompts.text(session, 'Hi! What is your name?');
    },
    function (session, results) {
        session.userData.name = results.response;
        session.endDialog();
    }
]);
dialog.matches('definition_who',[
  function(session,args,next){
    var person = builder.EntityRecognizer.findEntity(args.entities,'coordinator','cse');
    if(!person){
      builder.Prompt.text(session,"What is the department");
    }else{
      next({response: person.entity });
    }
  },
  function (session,results){
    session.send("The coordinator of CSE is Sumanth Balusu ");
  }
]);

dialog.matches('definition_where',function(session,args){
  var place = builder.EntityRecognizer.findEntity(args.entities,'valiant','event');
  if(place){
    session.send("The Venue for the Fest is at Vishnu Institute of Technology,Vishnupur,Bhimavaram.");
  }
});

dialog.matches('definition_know',function(session,args){
  var what = builder.EntityRecognizer.findEntity(args.entities,'valiant','event');
  if(what){
    session.send("Valiant : Vishnu's Active Learning in Advanced New Trends is a National Level Student Technical Symposium held every year to help the students imporove their Technical Skills.");
  }
});

dialog.matches('definition_when',function(session,args){
  var when = builder.EntityRecognizer.findEntity(args.entities,'valiant','event');
  if(when){
    session.send("The Fest is on 22nd and 23rd Feb at Vishnu Institute of Technology");
  }
});

dialog.matches('definition_why',function(session,args){
  var why = builder.EntityRecognizer.findEntity(args.entities,'valiant','event');
  if(why){
    session.send("The Valiant is held to imporove to ability of students in their technical skills of course there will be a party evening where you can show your moves if you are much of a Dancer");
  }
});
