import Link from "next/link";
import Image from "next/image";
import Header from "@/components/Header";
import Footer from "@/components/Footer";

export default function Contact() {
  return (
    <div className="min-h-screen flex flex-col m-0 p-0">
      <Header />
      <main className="flex-grow">
        <div className="bg-white text-gray-900 font-sans">
          {/* Hero Section */}
          <section className="relative bg-gradient-to-br from-purple-900 via-purple-800 to-purple-900 py-24">
            <div className="max-w-7xl mx-auto px-6">
              <div className="text-center max-w-4xl mx-auto">
                <h1 className="text-5xl md:text-6xl font-bold text-white mb-8 leading-tight font-zen_dots">
                  Get In Touch
                </h1>
                <p className="text-2xl text-gray-100 leading-relaxed">
                  Let's discuss how we can secure your critical infrastructure
                </p>
              </div>
            </div>
          </section>

          {/* Contact Section */}
          <section className="bg-white py-20">
            <div className="max-w-7xl mx-auto px-6">
              <div className="grid md:grid-cols-2 gap-12">
                <div>
                  <h2 className="text-5xl font-bold text-gray-900 mb-6 font-zen_dots">Contact Us</h2>
                  <p className="text-xl text-gray-700 mb-8 leading-relaxed">
                    Get in touch with our team to discuss your OT/ICS security needs. We're here to help
                    protect your critical infrastructure.
                  </p>
                  <div className="space-y-6">
                    <div className="flex items-start">
                      <div className="flex-shrink-0 mr-4">
                        <Image
                          src="https://ext.same-assets.com/4188355063/449956808.svg"
                          alt="Email"
                          width={40}
                          height={40}
                          className="w-10 h-10"
                        />
                      </div>
                      <div>
                        <h3 className="text-xl font-bold text-gray-900 mb-2">Email</h3>
                        <p className="text-lg text-gray-700">contact@icsgroup.com</p>
                      </div>
                    </div>
                    <div className="flex items-start">
                      <div className="flex-shrink-0 mr-4">
                        <Image
                          src="https://ext.same-assets.com/4188355063/2038971563.svg"
                          alt="Phone"
                          width={40}
                          height={40}
                          className="w-10 h-10"
                        />
                      </div>
                      <div>
                        <h3 className="text-xl font-bold text-gray-900 mb-2">Phone</h3>
                        <p className="text-lg text-gray-700">+1 (555) 123-4567</p>
                      </div>
                    </div>
                    <div className="flex items-start">
                      <div className="flex-shrink-0 mr-4">
                        <Image
                          src="https://ext.same-assets.com/4188355063/1704887478.svg"
                          alt="Office"
                          width={40}
                          height={40}
                          className="w-10 h-10"
                        />
                      </div>
                      <div>
                        <h3 className="text-xl font-bold text-gray-900 mb-2">Office</h3>
                        <p className="text-lg text-gray-700">
                          123 Security Boulevard
                          <br />
                          Cyber City, CC 12345
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <form className="space-y-6 bg-gray-50 p-8 rounded-lg">
                  <div className="grid md:grid-cols-2 gap-6">
                    <div>
                      <label className="block text-sm font-semibold text-gray-700 mb-2">First Name *</label>
                      <input
                        type="text"
                        placeholder="First name"
                        className="w-full px-4 py-3 text-lg border border-gray-300 rounded-lg focus:outline-none focus:border-purple-800"
                      />
                    </div>
                    <div>
                      <label className="block text-sm font-semibold text-gray-700 mb-2">Last Name *</label>
                      <input
                        type="text"
                        placeholder="Last name"
                        className="w-full px-4 py-3 text-lg border border-gray-300 rounded-lg focus:outline-none focus:border-purple-800"
                      />
                    </div>
                  </div>
                  <div className="grid md:grid-cols-2 gap-6">
                    <div>
                      <label className="block text-sm font-semibold text-gray-700 mb-2">Email *</label>
                      <input
                        type="email"
                        placeholder="Email address"
                        className="w-full px-4 py-3 text-lg border border-gray-300 rounded-lg focus:outline-none focus:border-purple-800"
                      />
                    </div>
                    <div>
                      <label className="block text-sm font-semibold text-gray-700 mb-2">Phone *</label>
                      <input
                        type="tel"
                        placeholder="Phone number"
                        className="w-full px-4 py-3 text-lg border border-gray-300 rounded-lg focus:outline-none focus:border-purple-800"
                      />
                    </div>
                  </div>
                  <div>
                    <label className="block text-sm font-semibold text-gray-700 mb-2">Company</label>
                    <input
                      type="text"
                      placeholder="Company name"
                      className="w-full px-4 py-3 text-lg border border-gray-300 rounded-lg focus:outline-none focus:border-purple-800"
                    />
                  </div>
                  <div>
                    <label className="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                    <textarea
                      placeholder="Tell us about your security needs"
                      rows={5}
                      className="w-full px-4 py-3 text-lg border border-gray-300 rounded-lg focus:outline-none focus:border-purple-800"
                    />
                  </div>
                  <button
                    type="submit"
                    className="w-full bg-purple-800 text-white text-xl font-semibold px-10 py-4 rounded-lg hover:bg-purple-900 transition-all"
                  >
                    Send Message
                  </button>
                </form>
              </div>
            </div>
          </section>

          {/* Location Section */}
          <section className="bg-gray-50 py-20">
            <div className="max-w-7xl mx-auto px-6">
              <div className="relative h-96 rounded-lg overflow-hidden">
                <Image
                  src="https://ext.same-assets.com/4188355063/1448874227.jpeg"
                  alt="Our Location"
                  fill
                  className="object-cover"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end">
                  <div className="p-8">
                    <h3 className="text-3xl font-bold text-white mb-2 font-zen_dots">Our Location</h3>
                    <p className="text-xl text-gray-100">123 Security Boulevard, Cyber City, CC 12345</p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          {/* FAQ Section */}
          <section className="bg-white py-20">
            <div className="max-w-4xl mx-auto px-6">
              <h2 className="text-5xl font-bold text-gray-900 mb-12 text-center font-zen_dots">
                Frequently Asked Questions
              </h2>
              <div className="space-y-6">
                <div className="bg-gray-50 p-6 rounded-lg border-l-4 border-purple-800">
                  <h3 className="text-xl font-bold text-gray-900 mb-3">What industries do you serve?</h3>
                  <p className="text-lg text-gray-700 leading-relaxed">
                    We serve critical infrastructure sectors including energy, manufacturing, transportation,
                    water utilities, and oil & gas.
                  </p>
                </div>
                <div className="bg-gray-50 p-6 rounded-lg border-l-4 border-purple-800">
                  <h3 className="text-xl font-bold text-gray-900 mb-3">
                    How quickly can you respond to security incidents?
                  </h3>
                  <p className="text-lg text-gray-700 leading-relaxed">
                    Our incident response team is available 24/7 and can typically respond within 2 hours of
                    initial contact.
                  </p>
                </div>
                <div className="bg-gray-50 p-6 rounded-lg border-l-4 border-purple-800">
                  <h3 className="text-xl font-bold text-gray-900 mb-3">Do you offer on-site assessments?</h3>
                  <p className="text-lg text-gray-700 leading-relaxed">
                    Yes, we provide both on-site and remote assessment services depending on your specific
                    requirements and preferences.
                  </p>
                </div>
                <div className="bg-gray-50 p-6 rounded-lg border-l-4 border-purple-800">
                  <h3 className="text-xl font-bold text-gray-900 mb-3">
                    What compliance frameworks do you support?
                  </h3>
                  <p className="text-lg text-gray-700 leading-relaxed">
                    We support IEC 62443, NERC CIP, ISO 27001, NIST 800-82, and other industry-specific
                    compliance frameworks.
                  </p>
                </div>
              </div>
            </div>
          </section>

          {/* CTA Section */}
          <section className="bg-gradient-to-r from-purple-900 to-purple-800 py-16">
            <div className="max-w-4xl mx-auto px-6 text-center">
              <h2 className="text-4xl font-bold text-white mb-4 font-zen_dots">Ready to Get Started?</h2>
              <p className="text-xl text-gray-100 mb-8">
                Schedule a consultation with our security experts today
              </p>
              <button className="bg-white text-purple-800 text-lg font-semibold px-8 py-4 rounded-lg hover:bg-gray-100 transition-all">
                Schedule Consultation
              </button>
            </div>
          </section>
        </div>
      </main>
      <Footer />
    </div>
  );
}
