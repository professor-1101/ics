import Link from "next/link";
import Image from "next/image";
import Header from "@/components/Header";
import Footer from "@/components/Footer";

export default function Home() {
  return (
    <div className="min-h-screen flex flex-col m-0 p-0">
      <Header />
      <main className="flex-grow">
        <div className="bg-white text-gray-900 font-sans">
          {/* Hero Section */}
          <section id="home" className="relative bg-gradient-to-br from-purple-900 via-purple-800 to-purple-900 py-24">
            <div className="max-w-7xl mx-auto px-6">
              <div className="text-center max-w-4xl mx-auto">
                <h1 className="text-5xl md:text-6xl font-bold text-white mb-8 leading-tight font-zen_dots">
                  Safeguarding OT/ICS Infrastructures Against Digital Threats
                </h1>
                <p className="text-2xl text-gray-100 mb-12 leading-relaxed">
                  Comprehensive cybersecurity solutions for Critical Infrastructures
                </p>
                <Link
                  href="/contact"
                  className="inline-block bg-white text-purple-800 text-xl font-semibold px-10 py-4 rounded-lg hover:bg-gray-100 transition-all shadow-lg"
                >
                  Contact Us
                </Link>
              </div>
            </div>
          </section>

          {/* Trust Section */}
          <section className="bg-gray-50 py-20">
            <div className="max-w-7xl mx-auto px-6">
              <div className="grid md:grid-cols-2 gap-12 items-center">
                <div>
                  <h2 className="text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    OT Cybersecurity You Can Trust
                  </h2>
                </div>
                <div>
                  <p className="text-xl text-gray-700 leading-relaxed">
                    We believe in a proactive approach to identifying and mitigating vulnerabilities
                    before they can be exploited. Our services are tailored to meet the unique needs of each
                    critical infrastructure and our clients, ensuring their data, systems, and reputation
                    remain secure.
                  </p>
                </div>
              </div>
            </div>
          </section>

          {/* Services Section */}
          <section id="services" className="bg-white py-20">
            <div className="max-w-7xl mx-auto px-6">
              <div className="text-center mb-16">
                <h2 className="text-5xl font-bold text-gray-900 mb-4 font-zen_dots">Our Services</h2>
              </div>
              <div className="grid md:grid-cols-3 gap-8">
                <div className="bg-gray-50 p-8 rounded-lg hover:shadow-xl transition-shadow">
                  <div className="flex justify-center mb-6">
                    <Image
                      src="https://ext.same-assets.com/4188355063/3128638324.svg"
                      alt="Audit & Compliance"
                      width={80}
                      height={80}
                      className="w-20 h-20"
                    />
                  </div>
                  <h3 className="text-2xl font-bold text-gray-900 mb-4 text-center font-zen_dots">
                    Audit & Compliance
                  </h3>
                  <p className="text-lg text-gray-700 leading-relaxed mb-6">
                    Comprehensive security audits, gap analysis, and regulatory compliance consulting for
                    frameworks such as IEC 62443, NERC CIP, and ISO 27001.
                  </p>
                </div>
                <div className="bg-gray-50 p-8 rounded-lg hover:shadow-xl transition-shadow">
                  <div className="flex justify-center mb-6">
                    <Image
                      src="https://ext.same-assets.com/4188355063/1434370718.svg"
                      alt="VA & Pen-Testing"
                      width={80}
                      height={80}
                      className="w-20 h-20"
                    />
                  </div>
                  <h3 className="text-2xl font-bold text-gray-900 mb-4 text-center font-zen_dots">
                    VA & Pen-Testing
                  </h3>
                  <p className="text-lg text-gray-700 leading-relaxed mb-6">
                    In-depth vulnerability assessments using NIST 800-82 and MITRE ATT&CK for ICS
                    methodologies, along with penetration testing tailored for SCADA, DCS, and other industrial
                    control environments.
                  </p>
                </div>
                <div className="bg-gray-50 p-8 rounded-lg hover:shadow-xl transition-shadow">
                  <div className="flex justify-center mb-6">
                    <Image
                      src="https://ext.same-assets.com/4188355063/618272276.svg"
                      alt="Managed Services"
                      width={80}
                      height={80}
                      className="w-20 h-20"
                    />
                  </div>
                  <h3 className="text-2xl font-bold text-gray-900 mb-4 text-center font-zen_dots">
                    Managed Services
                  </h3>
                  <p className="text-lg text-gray-700 leading-relaxed mb-6">
                    Robust protection for industrial operations by delivering continuous security monitoring and
                    rapid incident response in OT/ICS environments, minimizing downtime critical processes.
                  </p>
                </div>
              </div>
              <div className="text-center mt-12">
                <Link
                  href="/what-we-do"
                  className="inline-block bg-purple-800 text-white text-xl font-semibold px-10 py-4 rounded-lg hover:bg-purple-900 transition-all"
                >
                  View All Services
                </Link>
              </div>
            </div>
          </section>

          {/* Resources Section */}
          <section id="resources" className="bg-gray-50 py-20">
            <div className="max-w-7xl mx-auto px-6">
              <div className="text-center mb-16">
                <h2 className="text-5xl font-bold text-gray-900 mb-4 font-zen_dots">
                  Latest Resources & Blogs
                </h2>
                <p className="text-xl text-gray-700 max-w-3xl mx-auto">
                  Expert insights and knowledge on OT/ICS cybersecurity
                </p>
              </div>
              <div className="grid md:grid-cols-4 gap-8">
                <div className="bg-white rounded-lg overflow-hidden hover:shadow-xl transition-shadow border border-gray-200">
                  <Image
                    src="https://ext.same-assets.com/4188355063/2477033732.jpeg"
                    alt="IEC 62443 Compliance Guide"
                    width={300}
                    height={200}
                    className="w-full h-48 object-cover"
                  />
                  <div className="p-6">
                    <span className="inline-block bg-purple-800 text-white text-sm font-semibold px-3 py-1 rounded mb-3">
                      Whitepaper
                    </span>
                    <h3 className="text-xl font-bold text-gray-900 mb-3 leading-tight font-zen_dots">
                      IEC 62443 Compliance Guide
                    </h3>
                    <p className="text-gray-600 text-sm">January 15, 2025</p>
                  </div>
                </div>
                <div className="bg-white rounded-lg overflow-hidden hover:shadow-xl transition-shadow border border-gray-200">
                  <Image
                    src="https://ext.same-assets.com/4188355063/2299861103.jpeg"
                    alt="SCADA Security Implementation"
                    width={300}
                    height={200}
                    className="w-full h-48 object-cover"
                  />
                  <div className="p-6">
                    <span className="inline-block bg-purple-800 text-white text-sm font-semibold px-3 py-1 rounded mb-3">
                      Case Study
                    </span>
                    <h3 className="text-xl font-bold text-gray-900 mb-3 leading-tight font-zen_dots">
                      SCADA Security Implementation
                    </h3>
                    <p className="text-gray-600 text-sm">January 10, 2025</p>
                  </div>
                </div>
                <div className="bg-white rounded-lg overflow-hidden hover:shadow-xl transition-shadow border border-gray-200">
                  <Image
                    src="https://ext.same-assets.com/4188355063/2961322606.jpeg"
                    alt="OT Security Best Practices"
                    width={300}
                    height={200}
                    className="w-full h-48 object-cover"
                  />
                  <div className="p-6">
                    <span className="inline-block bg-purple-800 text-white text-sm font-semibold px-3 py-1 rounded mb-3">
                      Blog
                    </span>
                    <h3 className="text-xl font-bold text-gray-900 mb-3 leading-tight font-zen_dots">
                      OT Security Best Practices
                    </h3>
                    <p className="text-gray-600 text-sm">January 5, 2025</p>
                  </div>
                </div>
                <div className="bg-white rounded-lg overflow-hidden hover:shadow-xl transition-shadow border border-gray-200">
                  <Image
                    src="https://ext.same-assets.com/4188355063/2329529241.jpeg"
                    alt="Critical Infrastructure Threats 2025"
                    width={300}
                    height={200}
                    className="w-full h-48 object-cover"
                  />
                  <div className="p-6">
                    <span className="inline-block bg-purple-800 text-white text-sm font-semibold px-3 py-1 rounded mb-3">
                      Report
                    </span>
                    <h3 className="text-xl font-bold text-gray-900 mb-3 leading-tight font-zen_dots">
                      Critical Infrastructure Threats 2025
                    </h3>
                    <p className="text-gray-600 text-sm">December 28, 2024</p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          {/* Target Industries Section */}
          <section className="bg-white py-20">
            <div className="max-w-7xl mx-auto px-6">
              <div className="text-center mb-16">
                <h2 className="text-5xl font-bold text-gray-900 mb-4 font-zen_dots">
                  Target Industries & Infrastructure
                </h2>
                <p className="text-xl text-gray-700 max-w-3xl mx-auto">
                  Specialized security solutions for critical infrastructure sectors
                </p>
              </div>
              <div className="grid grid-cols-2 md:grid-cols-5 gap-8">
                {[
                  { icon: "https://ext.same-assets.com/4188355063/163523073.svg", name: "Energy & Utilities" },
                  { icon: "https://ext.same-assets.com/4188355063/2478667966.svg", name: "Manufacturing" },
                  { icon: "https://ext.same-assets.com/4188355063/3882103938.svg", name: "Transportation" },
                  { icon: "https://ext.same-assets.com/4188355063/435311489.svg", name: "Water & Wastewater" },
                  { icon: "https://ext.same-assets.com/4188355063/3663837237.svg", name: "Oil & Gas" },
                ].map((industry) => (
                  <div key={industry.name} className="group relative">
                    <div className="bg-gray-50 rounded-lg p-8 flex items-center justify-center h-56 border-2 border-gray-200 hover:border-purple-800 transition-all cursor-pointer">
                      <div className="text-center">
                        <Image
                          src={industry.icon}
                          alt={industry.name}
                          width={80}
                          height={80}
                          className="w-20 h-20 mx-auto opacity-30 group-hover:opacity-0 transition-opacity"
                        />
                        <div className="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-white/95 rounded-lg">
                          <span className="text-xl font-bold text-purple-800 px-4 py-2 font-zen_dots">
                            {industry.name}
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                ))}
              </div>
            </div>
          </section>

          {/* Newsletter Section */}
          <section className="bg-gradient-to-r from-purple-900 to-purple-800 py-16">
            <div className="max-w-4xl mx-auto px-6 text-center">
              <h2 className="text-4xl font-bold text-white mb-4">Stay Updated</h2>
              <p className="text-xl text-gray-100 mb-8">
                Subscribe to our newsletter for the latest insights on OT/ICS security
              </p>
              <div className="flex justify-center">
                <button className="bg-white text-purple-800 text-lg font-semibold px-8 py-4 rounded-lg hover:bg-gray-100 transition-all">
                  Subscribe
                </button>
              </div>
            </div>
          </section>

          {/* Contact Section */}
          <section id="contact" className="bg-gray-50 py-20">
            <div className="max-w-7xl mx-auto px-6">
              <div className="grid md:grid-cols-2 gap-12">
                <div>
                  <h2 className="text-5xl font-bold text-gray-900 mb-6">Contact Us</h2>
                  <p className="text-xl text-gray-700 mb-8">
                    Get in touch with our team to discuss your OT/ICS security needs
                  </p>
                </div>
                <form className="space-y-6">
                  <div className="grid md:grid-cols-2 gap-6">
                    <input
                      type="text"
                      placeholder="First name*"
                      className="w-full px-4 py-3 text-lg border border-gray-300 rounded-lg focus:outline-none focus:border-purple-800"
                    />
                    <input
                      type="text"
                      placeholder="Last name*"
                      className="w-full px-4 py-3 text-lg border border-gray-300 rounded-lg focus:outline-none focus:border-purple-800"
                    />
                  </div>
                  <div className="grid md:grid-cols-2 gap-6">
                    <input
                      type="email"
                      placeholder="Email address*"
                      className="w-full px-4 py-3 text-lg border border-gray-300 rounded-lg focus:outline-none focus:border-purple-800"
                    />
                    <input
                      type="tel"
                      placeholder="Phone number*"
                      className="w-full px-4 py-3 text-lg border border-gray-300 rounded-lg focus:outline-none focus:border-purple-800"
                    />
                  </div>
                  <textarea
                    placeholder="Message*"
                    rows={5}
                    className="w-full px-4 py-3 text-lg border border-gray-300 rounded-lg focus:outline-none focus:border-purple-800"
                  />
                  <button
                    type="submit"
                    className="bg-purple-800 text-white text-xl font-semibold px-10 py-4 rounded-lg hover:bg-purple-900 transition-all"
                  >
                    Send Message
                  </button>
                </form>
              </div>
            </div>
          </section>
        </div>
      </main>
      <Footer />
    </div>
  );
}
