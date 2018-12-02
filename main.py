import os
import sys
from argparse import ArgumentParser


from io import BytesIO

from flask import Flask, request, abort, render_template, Response, redirect, url_for


import urllib




"""app = Flask(__name__, template_folder = 'html')"""
app = Flask(__name__)


"""
@app.route("/", methods=['GET'])
def wakeup():
    return "woke up!!!!"




"""
#アップロードサイトのURL
@app.route('/', methods=['GET'])
def get():
    title = "TITLE"
    return render_template("about_changed.html")



"""
if __name__ == "__main__":
    port = int(os.getenv("PORT", 5000))
    app.run(host="0.0.0.0", port=port)
"""
if __name__ == '__main__':
    app.run(debug=True)

